function toggleText(bodybuilderId) {
    const textElement = document.getElementById(`text${bodybuilderId}`);
    textElement.classList.toggle("show-text");
  }
  

function showVideo(videoSrc, title, tips) {
  var videoModal = document.getElementById("videoModal");
  var video = document.getElementById("video");
  var videoTips = document.getElementById("videoTips");

  video.src = videoSrc;

  var tipsHTML = `<h2>${title}</h2><ul>`;
  tips.forEach((tip) => {
    tipsHTML += `<li>${tip}</li>`;
  });
  tipsHTML += "</ul>";

  videoTips.innerHTML = tipsHTML;
  videoModal.style.display = "block";
}

function closeModal() {
  var videoModal = document.getElementById("videoModal");
  var video = document.getElementById("video");

  video.pause();
  videoModal.style.display = "none";
}

  