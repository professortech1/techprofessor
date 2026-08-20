  <script>
        document.addEventListener("DOMContentLoaded", () => {
            const video = document.getElementById("techVideo");
            const socialButtons = document.querySelectorAll(".social-btn");

            // Pause video briefly on click feedback
            socialButtons.forEach(button => {
                button.addEventListener("click", (e) => {
                    const platform = button.getAttribute("data-name");
                    console.log(`Navigating to ${platform}...`);
                });
            });
        });
    </script>