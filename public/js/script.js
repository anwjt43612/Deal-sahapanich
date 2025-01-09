
        
        document.addEventListener("DOMContentLoaded", () => {
            const form = document.getElementById("registrationForm");
            const nextButton = document.getElementById("nextButton");
            const placeOptions = document.getElementsByName("place");
            const placeDetailsContainer = document.getElementById("place_details_container");
            const placeDetailsInput = document.getElementById("place_details");
            const tradeInYes = document.getElementById("trade_in_yes");
            const tradeInNo = document.getElementById("trade_in_no");
            const tradeModelContainer = document.getElementById("trade_model_container");
            const tradeModelInput = document.getElementById("trade_model");
             const memberYes = document.getElementById("member_yes");
        const memberNo = document.getElementById("member_no");
        const messageContainer = document.getElementById("member_message_container");

        // Show/Hide Trade Model Input based on Trade-In Radio
        tradeInYes.addEventListener("change", () => {
            tradeModelContainer.style.display = "block";
            tradeModelInput.required = true;
        });

        tradeInNo.addEventListener("change", () => {
            tradeModelContainer.style.display = "none";
            tradeModelInput.required = false;
        });

        // Show/Hide Place Details Input based on selected place
        placeOptions.forEach((option) => {
            option.addEventListener("change", () => {
                if (option.value === "พนักงานเสนอขาย" || option.value === "ร้านตัวแทนจำหน่าย") {
                    placeDetailsContainer.style.display = "block";
                    placeDetailsInput.required = true;
                } else {
                    placeDetailsContainer.style.display = "none";
                    placeDetailsInput.required = false;
                }
            });
        });

        // Show or hide the message based on the selected option for Member Status
        memberYes.addEventListener("change", () => {
            if (memberYes.checked) {
                messageContainer.style.display = "none";
            }
        });

        memberNo.addEventListener("change", () => {
            if (memberNo.checked) {
                messageContainer.style.display = "block";
            }
        });

        // Enable/Disable Submit Button Based on Form Validation
        form.addEventListener("input", () => {
            const isFormValid = form.checkValidity();
            nextButton.disabled = !isFormValid;
        });
    });


        //dynamic image and text adjust//
        const dynamicImage = document.getElementById('dynamicImage');
        const imageContainer = document.querySelector('.image-container');

        const updateLayout = () => {
          if (window.innerWidth > 768 || window.innerHeight < window.innerWidth) {
            // Landscape layout
            dynamicImage.src = 'landscape.jpg'; // Replace with your landscape image URL
            dynamicImage.alt = 'Landscape Image';
            imageContainer.classList.add('landscape');
            imageContainer.classList.remove('vertical');
          } else {
            // Vertical layout
            dynamicImage.src = 'vertical.jpg'; // Replace with your vertical image URL
            dynamicImage.alt = 'Vertical Image';
            imageContainer.classList.add('vertical');
            imageContainer.classList.remove('landscape');
          }
        };

        // Update layout on load and resize
        window.addEventListener('load', updateLayout);
        window.addEventListener('resize', updateLayout);
