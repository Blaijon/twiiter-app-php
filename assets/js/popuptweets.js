$(function(){
	$(document).on('click', '.t-show-popup', function(){
		var tweet_id = $(this).data('tweet');
		$.post('http://localhost/phptwitter/core/ajax/popuptweets.php', {showpopup:tweet_id}, function(data){
			$('.popupTweet').html(data);
			$('.tweet-show-popup-box-cut').click(function(){
				$('.tweet-show-popup-wrap').hide();
			})
		});
	});
});