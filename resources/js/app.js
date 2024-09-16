import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


function fetchCourseVideos(courseId) {
    if (courseId) {
        const loadingIndicator = document.getElementById('loading-indicator');
        const courseVideosDiv = document.getElementById('course-videos');
        loadingIndicator.style.display = 'block';

        fetch(`/courses/${courseId}/videos`)
            .then(response => response.json())
            .then(videos => {
                loadingIndicator.style.display = 'none';
                courseVideosDiv.innerHTML = ''; // Clear existing videos

                if (videos.length) {
                    videos.forEach(video => {
                        const videoElement = document.createElement('div');
                        videoElement.className = 'video-item';
                        videoElement.innerHTML = `
                            <h4>${video.title}</h4>
                            <p>${video.description}</p>
                            <p>Duration: ${video.duration}</p>
                            <video controls>
                                <source src="/storage/${video.video}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        `;
                        courseVideosDiv.appendChild(videoElement);
                    });
                } else {
                    courseVideosDiv.innerHTML = '<p>No videos found for this course.</p>';
                }
            })
            .catch(error => {
                loadingIndicator.style.display = 'none';
                console.error('Error fetching videos:', error);
            });
    }
}
