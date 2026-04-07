/**
 * Yunis Theme — Custom Scripts
 * Parallax scroll effect + Audio player controls
 */

document.addEventListener('DOMContentLoaded', function () {

    /* =========================================
       Parallax Scroll Effect
       ========================================= */
    const bgLayer = document.querySelector('.layer-bg');
    const fgLayer = document.querySelector('.layer-fg');

    if (bgLayer || fgLayer) {
        window.addEventListener('scroll', function () {
            const scrollPosition = window.pageYOffset;

            if (bgLayer) {
                bgLayer.style.transform = 'translateY(' + (scrollPosition * 0.5) + 'px)';
            }
            if (fgLayer) {
                fgLayer.style.transform = 'translateY(' + (scrollPosition * 0.2) + 'px)';
            }
        });
    }

    /* =========================================
       Custom Audio Player
       ========================================= */
    const players = document.querySelectorAll('.custom-player');

    players.forEach(function (player) {
        const audio = player.querySelector('audio');
        const playBtn = player.querySelector('.player-btn');

        if (!audio || !playBtn) return;

        const playIcon = playBtn.querySelector('.play-icon');
        const pauseIcon = playBtn.querySelector('.pause-icon');
        const progressBar = player.querySelector('.progress-bar');
        const currentTimeEl = player.querySelector('.current-time');
        const durationEl = player.querySelector('.duration');

        function formatTime(secs) {
            if (isNaN(secs)) return '0:00';
            var m = Math.floor(secs / 60);
            var s = Math.floor(secs % 60);
            return m + ':' + (s < 10 ? '0' : '') + s;
        }

        function updateDuration() {
            if (durationEl) durationEl.textContent = formatTime(audio.duration);
            if (progressBar) progressBar.max = audio.duration;
        }

        if (audio.readyState >= 1) updateDuration();
        audio.addEventListener('loadedmetadata', updateDuration);

        playBtn.addEventListener('click', function () {
            if (audio.paused) {
                audio.play();
                if (playIcon) playIcon.style.display = 'none';
                if (pauseIcon) pauseIcon.style.display = 'block';
            } else {
                audio.pause();
                if (playIcon) playIcon.style.display = 'block';
                if (pauseIcon) pauseIcon.style.display = 'none';
            }
        });

        audio.addEventListener('timeupdate', function () {
            if (progressBar) {
                progressBar.value = audio.currentTime;
                var percentage = (audio.currentTime / audio.duration) * 100 || 0;
                progressBar.style.background =
                    'linear-gradient(to right, var(--wp--preset--color--golden) 0%, var(--wp--preset--color--golden) ' +
                    percentage + '%, rgba(255,255,255,0.2) ' + percentage + '%, rgba(255,255,255,0.2) 100%)';
            }
            if (currentTimeEl) currentTimeEl.textContent = formatTime(audio.currentTime);
        });

        if (progressBar) {
            progressBar.addEventListener('input', function () {
                audio.currentTime = progressBar.value;
            });
        }

        audio.addEventListener('ended', function () {
            if (playIcon) playIcon.style.display = 'block';
            if (pauseIcon) pauseIcon.style.display = 'none';
            if (progressBar) {
                progressBar.value = 0;
                progressBar.style.background = 'rgba(255, 255, 255, 0.2)';
            }
            if (currentTimeEl) currentTimeEl.textContent = '0:00';
        });
    });
});
