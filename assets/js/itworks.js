$('#submit-category').on('click', function() {
	var category_name = $("input[name='category_name']").val();
	if (category_name.length < 1) {
		alert('Please fill in the required forms.');
		$("input[name='category_name']").parent('div').addClass('has-error');
	} else {
		$.post( "category/add", $( "#add-new-category" ).serialize(), function(data) {
			var thisType = data;
			if (data != 'success') {
				thisType = 'error';
			}
			
			$('#modalCategories').modal('hide');
			
			swal({
				title: data.toUpperFirst(),
				type: thisType
			}).then(function() {
				window.location.reload();
			});
		});
	}
});

$('#submit-topic').on('click', function() {
	var category_name = $("input[name='topic_name']").val();
	if (category_name.length < 1) {
		alert('Please fill in the required forms.');
		$("input[name='topic_name']").parent('div').addClass('has-error');
	} else {
		$.post( "topic/add", $( "#add-new-topic" ).serialize(), function(data) {
			var thisType = data;
			if (data != 'success') {
				thisType = 'error';
			}
			
			$('#modalTopics').modal('hide');
			
			swal({
				title: data.toUpperFirst(),
				type: thisType
			}).then(function() {
				window.location.reload();
			});
		});
	}
});

$("#navbarCollapse a").on('click', function() {
	var activeGrade = $(this).data('grade');
	$("#mobile-navbar-title").html($(this).data('title'));
	
	$("#card-itworks ul.nav-pills").find('li').each(function() {
		if (activeGrade !== $(this).find('a').data('grade')) {
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
			}
		} else {
			$(this).addClass('active');
		}
	});
});

$("#card-itworks ul.nav-pills a").on('click', function() {
	$("#mobile-navbar-title").html($(this).data('title'));
});

itworks = {
	testTimer: undefined,
	myAnswer: null,
	correctAnswer: null,
	maxLessons: 0,
	correctCnt: 0,
	answered: 0,
	clickCount: 0,
	stopCount: false,
	streakCnt: 0,
	correctReturn: [
		'Amazing!',
		'Super!',
		'Congratulations!',
		'Fantastic!'
	],
	wrongReturn: [
		'Bobo!',
		'Tanga!',
		'Inutil!',
		'Mongoloid!'
	],
	changePageContent: function(thisPage) {
		var postData = {
			'test': '1'
		};
		
		$.ajax({
			type: 'POST',
			url: thisPage,
			processData: true,
			data: postData,
			dataType: "json",
			headers: {
				'Content-Type': 'application/x-www-form-urlencoded'
			}
		})
		.done(function (data) {
			console.log(data);
		});
	},
	toggleAnswer: function(button, question) {
		var self = this;
		var thisButton = $(button).prop('id');
		
		self.correctAnswer = null;
		$(button).parent('label').addClass('active');
		$('.answer-buttons-'+question).find('label.active').each(function() {
			if (thisButton !== $(this).find('input').prop('id')) {
				$(this).removeClass('active');
			}
		});
	},
	checkAnswer: function(type, question) {
		var self = this;
		var postData = {
			lesson: question
		};
		
		$.ajax({
			type: 'POST',
			url: 'get_answer',
			data: postData,
			dataType: 'json',
			headers: {
				'Content-Type': 'application/x-www-form-urlencoded'
			}
		})
		.done(function (data) {
			if (data.result == 'success') {
				var result = data.answer;
				self.correctAnswer = result.answer;
				
				if (type == 'count') {
					self.myAnswer = $('.answer-buttons-'+question).find("label input[type='radio']:checked").val();
					
					if (typeof self.myAnswer === 'undefined' || self.myAnswer === null) {
						swal("Please select an answer.");
					} else {
						self.answered++;
						
						if (self.myAnswer == self.correctAnswer) {
							self.myAnswer = null;
							self.correctAnswer = null;
							self.correctCnt++;
							var myScore = ((self.correctCnt / self.maxLessons) * 100);
							console.log(myScore);
							myScore = myScore + self.streakCnt;
							
							swal({
								title: self.correctReturn[self.randomNumber(0, self.correctReturn.length)],
								type: 'success'
							}).then(function() {
								$(".test-score").html(Math.round(myScore));
								$("#test-questions").steps('next');
								
								self.stopCount = false;
								self.clickCount = 0;
								self.streakCnt++;
							});
						} else {
							self.streakCnt = 0;
							var solveSection = '';
							
							$("#questionaire-"+question).addClass('hidden');
							$("#wrong-answer-"+question).removeClass('hidden');
							
							$("#review-answer h3").html(self.myAnswer);
							
							$("#review-answer section").html($("#questionaire-"+question+" div#for-review").html());
							$("#review-answer section *").prop("disabled", true).off('click')
								.removeClass('active')
								.css({
									'box-shadow': 'none',
									'cursor': 'default',
									'user-select': 'none'
								});
							
							if (type == 'count') {
								self.stopCount = true;
								self.clickCount = 0;
								
								$("#review-answer div[id^='answer-image-']").removeAttr('onclick');
								$("#review-answer div[id^='answer-image-'] span").hide();
								$("#review-answer div[id^='answer-image-'] img").css('opacity', '1');
								
								var imgCnt = 1;
								$("#review-answer div[id^='answer-image-']").each(function() {
									$(this).find('span').html(imgCnt);
									solveSection += "<div id='answer-image-" + question + "-" + imgCnt + "'>" + $(this).html() + "</div>";
									imgCnt++;
								});
								
								var isPlural = '';
								
								if (/^(strawberry|butterfly|candy)$/i.test(result.question1)) {
									isPlural = result.question1.replace(new RegExp('y$', 'gm'), 'ies');
								} else if (/^(starfish|sheep|fish)$/i.test(result.question1)) {
									isPlural = result.question1;
								} else {
									isPlural = result.question1 + "s";
								}
								
								$("#solve-answer p.solve1").html("Let's count the " + isPlural + ".");
								$("#solve-answer section").html(solveSection);
								
								var solve2Name = "There is " + result.answer + " " + isPlural + ".";
								if (result.answer > 1) {
									solve2Name = "There are " + result.answer + " " + isPlural + ".";
								}
								$("#solve-answer p.solve2").html(solve2Name);
								
								$("#solve-answer div[id^='answer-image-'] span").show();
								$("#solve-answer div[id^='answer-image-'] img").css('opacity', '0.7');
							}
							
							$("#review-answer, #solve-answer, #got-it").fadeIn();
							if (result.remember !== null && result.remember !== '') {
								$("#remember-answer").fadeIn();
							}
						}
					}
				}
			}
		});
	},
	nextQuestion: function() {
		var self = this;
		var myScore = $(".test-score").html();
		
		$("#review-answer, #remember-answer, #solve-answer, #got-it").fadeOut();
		$("#test-questions").steps('next');
		
		myScore = myScore - 1;
		myScore = (myScore < 0) ? 0 : myScore;
		$(".test-score").html(myScore);
		
		self.stopCount = false;
		self.clickCount = 0;
	},
	startTimer: function() {
		var self = this;
		if (typeof self.testTimer === 'undefined') {
			self.testTimer = setInterval(function() {
				var bt = $(".test-timer").html().split(':');
				var bHour = parseInt(bt[0]);
				var bMin = parseInt(bt[1]);
				var bSec = parseInt(bt[2]);
				bSec++;
				if (bSec > 59) {
					bSec = 0;
					bMin++;
				}
				if (bMin > 59) {
					bMin = 0;
					bHour++;
				}
				if (bHour < 10) {bHour = "0"+bHour;}
				if (bMin < 10) {bMin = "0"+bMin;}
				if (bSec < 10) {bSec = "0"+bSec;}
				
				$(".test-timer").html(bHour+":"+bMin+":"+bSec);
			}, 1000);
		}
		
		$("#test-questions").steps('next');
	},
	stopTimer: function() {
		var self = this;
		if (typeof self.testTimer !== 'undefined') {
			clearInterval(self.testTimer);
			self.testTimer = undefined;
		}
	},
	randomNumber: function(min, max) {
		min = Math.ceil(min);
		max = Math.floor(max);
		return Math.floor(Math.random() * (max - min)) + min;
	},
	showCount: function(thisOne, max) {
		var self = this;
		
		if (!self.stopCount && !$(thisOne).find('span').is(':visible')) {
			$(thisOne).find('span').html(self.getMouseClick(max));
		}
		
		$(thisOne).find('img').css('opacity', '0.7');
		$(thisOne).find('span').show();
	},
	getMouseClick: function(max) {
		var self = this;
		self.clickCount++;
		//console.log('test', self.clickCount);
		if (self.clickCount <= max) {
			return self.clickCount;
		} else {
			self.stopCount = true;
		}
	}
};


window.addEventListener("beforeunload", function (e) {
	if (typeof itworks.testTimer !== 'undefined') {
		var confirmationMessage = "Please finish the current test.";
	
		(e || window.event).returnValue = confirmationMessage;     //Gecko + IE
		return confirmationMessage;                                //Webkit, Safari, Chrome etc.
	}
});

String.prototype.toUpperFirst = function() {
    return this.charAt(0).toUpperCase() + this.slice(1);
}