<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฟอร์ม ลงทะเบียนความสนใจ Samsung Galaxy S25 Series</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/image/sp.ico">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/image/sp.png" alt="Logo" style="height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://sahapanich.com/" target="_blank">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://sahapanich.com/saha/ww/ww_loc_2" target="_blank">ร้านสาขา ตัวแทน</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://sahapanich.com/saha/ww/ww_cpc_1" target="_blank">แจ้งเรื่องร้องเรียน</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Image Container -->
    <div class="container-fluid image-container">
        <img id="dynamicImage" src="" alt="Responsive Image" class="img-fluid">
        <div id="dynamicText" class="text-content">
          <a class="galaxy-text">Galaxy Unpacked</a>
           <br> <h3 class="text-detial">23 มกราคม 67 | ลงทะเบียนความสนใจที่ สหพานิช</h3>
            <h4 class="rcorners1 text-detial">พร้อมรับสิทธิพิเศษมากมาย</h4>
        </div>
      </div>
<!-- text card -->
    <div class="container my-4">
        <div class="card p-3">
            <div class="row text-center text-md-start">
                <!-- Topic 1 -->
                <div class="col-12 col-md-3 mb-3">
                    <div class="d-flex align-items-center justify-content-start">
                        <!-- Custom Icon -->
                        <img src="sp.png" alt="Home Icon" style="width: 40px; height: 40px;" class="me-3">
                        <div>
                            <h6 class="mb-1">SAHA Care+</h6>
                            <p class="mb-0">รับความคุ้มครองเพิ่ม จาก SAHA Care+</p>
                        </div>
                    </div>
                </div>
                <!-- Topic 2 -->
                <div class="col-12 col-md-3 mb-3">
                    <div class="d-flex align-items-center justify-content-start">
                        <!-- Custom Icon -->
                        <img src="sp.png" alt="Settings Icon" style="width: 40px; height: 40px;" class="me-3">
                        <div>
                            <h6 class="mb-1">อัพความจุฟรี X2</h6>
                            <p class="mb-0">มูลค่าสูงสุด 10,000บาท เฉพาะ Pre-Order</p>
                        </div>
                    </div>
                </div>
                <!-- Topic 3 -->
                <div class="col-12 col-md-3 mb-3">
                    <div class="d-flex align-items-center justify-content-start">
                        <!-- Custom Icon -->
                        <img src="sp.png" alt="Team Icon" style="width: 40px; height: 40px;" class="me-3">
                        <div>
                            <h6 class="mb-1">บริการเก่าแลกใหม่</h6>
                            <p class="mb-0">เก่าแลกใหม่ จาก CompAsia</p>
                        </div>
                    </div>
                </div>
                <!-- Topic 4 -->
                <div class="col-12 col-md-3 mb-3">
                    <div class="d-flex align-items-center justify-content-start">
                        <!-- Custom Icon -->
                        <img src="sp.png" alt="Contact Icon" style="width: 40px; height: 40px;" class="me-3">
                        <div>
                            <h6 class="mb-1">Easy E-Receipt</h6>
                            <p class="mb-0">ลดหยอนภาษีสูงสุด 30,000บาท</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration Form -->
    <div class="container mt-5">
        <div class="form-frame">
            <h2 class="mb-4" >ลงทะเบียนความสนใจ</h2>
            <h1 class="mb-4">Galaxy Unpacked</h1>
            <h3><span class="required-label">*</span> กรุณากรอกข้อมูลให้ครบถ้วน</h3>
            <form id="registrationForm" action="save.php" method="POST">
                <!-- Name Row -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="first_name" class="form-label" style="font-weight: 400; font-size:20px;" >ชื่อ <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="กรอกชื่อ"  required>
                    </div>
                    <div class="col-md-6">
                        <label for="last_name" class="form-label" style="font-weight: 400; font-size:20px;"">นามสกุล <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="นามสกุล" required>
                    </div>
                </div>
                <!-- Email and Phone Row -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="email" class="form-label" style="font-weight: 400; font-size:20px;"">Email <span class="required-label">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="โปรดระบุอีเมล" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label" style="font-weight: 400;font-size:20px;"">เบอร์โทรศัพท์ ที่ติดต่อได้ <span class="required-label">*</span></label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="โปรดระบุเบอร์โทรศัพท์ ที่สามารถติดต่อกลับได้" required>
                    </div>
                </div>
                <!-- Interesting Promotions -->
                <div class="mb-3">
    <label class="form-label" style="font-weight: 400;font-size:20px;">ต้องการซื้อสด หรือซื้อผ่อน <span class="required-label">*</span></label>
    <div class="row">
        <div class="col-md-4 col-12">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="interests" value="ซื้อเงินสด" id="discounts" required>
                <label class="form-check-label" for="discounts" style="font-weight: 300;">ซื้อสด</label>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="interests" value="ซื้อเงินผ่อน" id="bogo">
                <label class="form-check-label" for="bogo"style="font-weight: 300;">ซื้อผ่อนกับสหพานิช</label>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="interests" value="ผ่านบัตรเครดิต" id="credit">
                <label class="form-check-label" for="credit"style="font-weight: 300;">ผ่อนผ่านบัตรเครดิต</label>
            </div>
        </div>
    </div>
</div>



                <!-- Trade-In Option (Radio Buttons) -->
                <div class="mb-3">
                    <label class="form-label" style="font-weight: 400; font-size:20px;">ต้องการนำเครื่องเก่ามาต่อแลกเป็นเครื่องใหม่ (Trade-in by CompAsia)<span class="required-label">*</span></label>
                    <div>
                        <input type="radio" id="trade_in_yes" name="trade_in" value="yes" required>
                        <label for="trade_in_yes" style="font-weight: 300;">ต้องการ</label>
                        <input type="radio" id="trade_in_no" name="trade_in" value="no" required>
                        <label for="trade_in_no"style="font-weight: 300;">ไม่ต้องการ</label>
                    </div>
                </div>

                <!-- Trade-In Model (Visible if "Yes" is selected) -->
                <div class="mb-3" id="trade_model_container" style="display: none;">
                    <label for="trade_model" class="form-label" style="font-weight: 400;">โปรดกรอกรุ่นที่ต้องการ Trade in <span class="required-label">*</span></label>
                    <input type="text" class="form-control" id="trade_model" name="trade_model" placeholder="ระบุ เช่น ไอโฟน11">
                </div>

              <!-- Place You Want to Buy (Grid 3 Columns) -->
<div class="mb-3">
    <label class="form-label" style="font-weight: 400; font-size:20px;">ช่องทางการซื้อสินค้า <span class="required-label">*</span></label>
    <div class="row">
        <div class="col-md-4 col-12">
            <div class="form-check">
                <input type="radio" id="showroom1" name="place" value="สำนักงานใหญ่" required>
                <label for="showroom1"style="font-weight: 300;">โชว์รูมสหพานิชเชียงใหม่ (สำนักงานใหญ่)</label>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="form-check">
                <input type="radio" id="showroom2" name="place" value="สาขาลำพูน">
                <label for="showroom2"style="font-weight: 300;">โชว์รูมสหพานิช สาขาลำพูน</label>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="form-check">
                <input type="radio" id="showroom3" name="place" value="สาขาแม่ฮ่องสอน">
                <label for="showroom3"style="font-weight: 300;">โชว์รูมสหพานิช สาขาแม่ฮ่องสอน</label>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="form-check">
                <input type="radio" id="representative" name="place" value="พนักงานเสนอขาย">
                <label for="representative"style="font-weight: 300;">พนักงานเสนอขาย</label>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="form-check">
                <input type="radio" id="dealer" name="place" value="ร้านตัวแทนจำหน่าย">
                <label for="dealer"style="font-weight: 300;">ร้านตัวแทนจำหน่าย</label>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="form-check">
                <input type="radio" id="online" name="place" value="ช่องทางออนไลน์">
                <label for="online"style="font-weight: 300;">ช่องทางออนไลน์ (Facebook , Line , Website)</label>
            </div>
        </div>
    </div>
</div>

                <!-- Dynamic Input for Representative or Dealer Shop -->
                <div class="mb-3" id="place_details_container" style="display: none;">
                    <label for="place_details" class="form-label" style="font-weight: 400;">โปรดกรอก ชื่อตัวแทน หรือ ร้านตัวแทนจำหน่าย <span class="required-label">*</span></label>
                    <input type="text" class="form-control" id="place_details" name="place_details" placeholder="โปรดระบุชื่อร้านตัวแทน หรือ ตัวแทนเสนอขาย">
                </div>

             <!-- Member Status -->
<div class="row mb-3">
    <div class="col-12">
        <label class="form-label" style="font-weight: 400; font-size:20px;">ท่านเป็นสมาชิกไลน์ @sahaconnect หรือไม่<span class="required-label">*</span></label>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="member_yes" name="member_status" value="Yes" required>
            <label class="form-check-label" for="member_yes"style="font-weight: 300;">เป็นสมาชิกแล้ว</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="member_no" name="member_status" value="No" required>
            <label class="form-check-label" for="member_no"style="font-weight: 300;">ยังไม่ได้เป็นสมาชิก</label>
        </div>
    </div>
</div>

<!-- Dynamic Text -->
<div class="row mb-3 textclick" id="member_message_container" style="display: none;">
    <div class="col-12">
        <p style="color: #007bff;">คุณสามารถ เพิ่มเพื่อนบัญชี LINE @Sahaconnect โดย  </p><a class=" textclikc" href="https://lin.ee/ERlOlrd" target="_blank" style="color:red;">คลิกที่นี่ เพื่อเพิ่มเพื่อน</a> 
    </div>
</div>

                <!-- Privacy Policy -->
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="privacy_policy" name="privacy_policy" required>
                    <label class="form-check-label" for="privacy_policy" style="font-weight: 400;">ฉันเข้าใจและยอมรับ <a  href="https://ecat.sahapanich.com/e-catalog/www/pdpa.pdf">นโยบายความเป็นส่วนตัวบริษัท สหพานิช เชียงใหม่ จำกัด</a> <span class="required-label">*</span></label>
                </div>
                <!-- Next Button -->
                <div class="next-button-container">
                    <button type="submit" class="btn btn-primary" id="nextButton" disabled>ยินยอมเพื่อลงทะเบียน และ รับโค้ดพิเศษจาก Samsung</button>
                   
                </div>
                <br> <h3>หมายเหตุ :แบบฟอร์มนี้เป็นการลงทะเบียนควาสนใจเท่านั้น มิใช่การจองเครื่องแต่อย่างใด บริษัทสงวนสิทธิ์การเปลี่ยนแปลงเงื่อนไขได้โดยไม่ต้องแจ้งให้ทราบล่วงหน้า</h3>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; บริษัท สหพานิช เชียงใหม่ จำกัด</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
 <script>   document.addEventListener("DOMContentLoaded", () => {
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
            dynamicImage.src = '/image/landscape.jpg'; // Replace with your landscape image URL
            dynamicImage.alt = 'Landscape Image';
            imageContainer.classList.add('landscape');
            imageContainer.classList.remove('vertical');
          } else {
            // Vertical layout
            dynamicImage.src = '/image/vertical.jpg'; // Replace with your vertical image URL
            dynamicImage.alt = 'Vertical Image';
            imageContainer.classList.add('vertical');
            imageContainer.classList.remove('landscape');
          }
        };

        // Update layout on load and resize
        window.addEventListener('load', updateLayout);
        window.addEventListener('resize', updateLayout);</script>
   
</body>
</html>
