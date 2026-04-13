<x-nav/>
    <main>
        <section class="offers">
            <h2>عروض خاصة على منصة سافر</h2>
            <div class="offer-cards">
                <div class="offer-card" onclick="showOfferDetails('offer1')">
                    <img src="image/offer1.png" alt="عرض 1">
                    <h3>اخر دقيقة</h3>
                    <p>سحب على رحلة مجانية عبر سافر</p>
                    <a href="javascript:void(0)">اكتشف الآن</a>
                </div>
                <div class="offer-card" onclick="showOfferDetails('offer2')">
                    <img src="image/offer2.png" alt="عرض 2">
                    <h3>الرحلة علينا والفندق عليك</h3>
                    <p>احجز رحلتك عبر سافر مع حجز فندقي</p>
                    <a href="javascript:void(0)">اكتشف الآن</a>
                </div>
                <div class="offer-card" onclick="showOfferDetails('offer3')">
                    <img src="image/offer3.png" alt="عرض 3">
                    <h3>رحلتين برحلة</h3>
                    <p>احجز رحلتك مع رحلة العودة مجانا</p>
                    <a href="javascript:void(0)">اكتشف الآن</a>
                </div>
            </div>
        </section>

    
        <section class="cities">
            <h2>لمحات عن مدن مشهورة</h2>
            <div class="city-cards">
                <div class="city-card" onclick="showCityDetails('paris')">
                    <img src="image/paris.webp" alt="مدينة 1">
                    <h3>باريس</h3>
                    <p>مدينة الأضواء التي تتميز بمعالمها الشهيرة مثل برج إيفل</p>
                </div>
                <div class="city-card" onclick="showCityDetails('dubai')">
                    <img src="image/dubai.jpg" alt="مدينة 2">
                    <h3>دبي</h3>
                    <p>أفقها الشاهق ووجهاتها السياحية الفاخرة تجعلها مقصدًا عالميًا</p>
                </div>
                <div class="city-card" onclick="showCityDetails('london')">
                    <img src="image/london.jpg" alt="مدينة 3">
                    <h3>لندن</h3>
                    <p>المدينة التاريخية التي تجمع بين العراقة والتطور الحديث</p>
                </div>
            </div>
        </section>
    </main>

 
    <footer>
        <p>© 2024 شركة خيال - جميع الحقوق محفوظة</p>
    </footer>


    <div id="offerPopup" class="popup hidden">
        <div class="popup-content">
            <h3>تفاصيل العرض</h3>
            <p id="offerDescription"></p>
            <button onclick="hidePopup()">إغلاق</button>
            <button onclick="bookOffer()">احصل على العرض</button>
        </div>
    </div>

  
    <div id="cityPopup" class="popup hidden">
        <div class="popup-content">
            <h3 id="cityName"></h3>
            <p id="cityDescription"></p>
            <button onclick="hidePopup()">إغلاق</button>
            <button onclick="bookCity()">حجز الرحلة</button>
        </div>
    </div>


    <div id="paymentPopup" class="popup hidden">
        <div class="popup-content">
            <h3>إتمام عملية الدفع</h3>
            <p>يرجى إدخال معلومات الدفع لإتمام الحجز.</p>
            <form id="paymentForm">
                <input type="text" placeholder="رقم البطاقة" required>
                <input type="text" placeholder="تاريخ انتهاء الصلاحية (MM/YY)" required>
                <input type="text" placeholder="CVV" required>
                <button type="button" onclick="processPayment()">ادفع الآن</button>
            </form>
            <button onclick="hidePopup()">إلغاء</button>
        </div>
    </div>
</body>
</html>
