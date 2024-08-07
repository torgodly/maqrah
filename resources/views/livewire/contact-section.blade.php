<section id="contact" class="contact">
    <div class="container" >

        <div class="section-header">
            <h2>اتصل بنا</h2>
            <p>إذا كان لديك أي استفسار أو تحتاج إلى مساعدة، لا تتردد في التواصل معنا من خلال المعلومات أدناه.</p>
        </div>

        <div class="row gx-lg-0 gy-4">

            <div class="col-lg-4">
                <div class="info-container d-flex flex-column align-items-center justify-content-center">
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>الموقع:</h4>
                            <p>تاجوراء، الضواحي</p>
                        </div>
                    </div>

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>البريد الإلكتروني:</h4>
                            <p>info@maqraah.ly</p>
                        </div>
                    </div>

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>اتصل بنا:</h4>
                            <p>+218 91-6579403</p>
                        </div>
                    </div>

                    <div class="info-item d-flex">
                        <i class="bi bi-clock flex-shrink-0"></i>
                        <div>
                            <h4>ساعات العمل:</h4>
                            <p>الاحد - الخميس: 11 صباحًا - 11 مساءً</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form wire:submit.prevent="submit" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" wire:model="name" class="form-control" id="name" placeholder="اسمك" required>
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" wire:model="email" class="form-control" id="email" placeholder="بريدك الإلكتروني" required>
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" wire:model="subject" class="form-control" id="subject" placeholder="الموضوع" required>
                        @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" wire:model="message" rows="5" placeholder="رسالتك" required></textarea>
                        @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="my-3">
                        <div class="loading">جارٍ التحميل</div>
                        <div class="error-message"></div>
                        <div class="sent-message">تم إرسال رسالتك بنجاح. شكرًا!</div>
                    </div>
                    <div class="text-center">
                        <button type="submit">إرسال الرسالة</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
