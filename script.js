function changeVideo(videoSrc) {
    var videoPlayer = document.getElementById('videoPlayer');
    videoPlayer.src = videoSrc;
    videoPlayer.load();
    videoPlayer.play();
  }

  document.getElementById('form-discussion').addEventListener('submit', function(e) {
    e.preventDefault();
    
    var authorInput = document.getElementById('author');
    var discussionInput = document.getElementById('discussion');
    
    var author = authorInput.value;
    var discussion = discussionInput.value;
    var date = new Date().toLocaleDateString(); // Tanggal saat ini
    
    if (author && discussion) {
      var discussionList = document.getElementById('discussion-list');
      
      var discussionItem = document.createElement('div');
      discussionItem.classList.add('discussion-item');
      discussionItem.innerHTML = '<strong>' + author + '</strong> - ' + discussion + ' - ' + date;
      
      discussionList.appendChild(discussionItem);
      
      // Reset form
      authorInput.value = '';
      discussionInput.value = '';
    } else {
      alert('Mohon isi semua kolom!');
    }
  });