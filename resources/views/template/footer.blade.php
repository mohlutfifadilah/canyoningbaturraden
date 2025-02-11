<hr class="mt-0 pt-0" style="border: #41AB5D 1px solid;">
<div class="container-fluid">
    <footer class="footer text-center p-0">
        <div class="row my-3">
            {{-- <div class="col-md-4">
                <h5 class="font-weight-bold">Member Of</h5>
                <img src="logo1.png" alt="Logo 1" class="img-fluid">
            </div> --}}
            <div class="col-md-6 p-0">
                <p class="text-center" style="color: #41AB5D;">Affiliate with</p>
                <img src="{{ asset('assets/img/aci.jpeg') }}" alt="Logo 2" class="img-fluid mr-5" width="100" height="100">
                <img src="{{ asset('assets/img/ropefree.png') }}" alt="Logo 2" class="img-fluid" width="130" height="130">
            </div>
            <div class="col-md-6 p-0">
                <p class="text-center" style="color: #41AB5D;">Social Media</p>
                <div class="container d-flex justify-content-center align-items-center p-0">
                    @php
                        $user = \App\Models\User::find(1);
                        $noWhatsapp = $user->no_whatsapp; // Ambil nomor WhatsApp dari user

                        // Pastikan nomor diawali dengan '0' dan ubah menjadi nomor internasional
                        $formattedNumber = '62' . substr($noWhatsapp, 1); // Menghapus angka '0' dan menambahkan '62' di depan

                        // Membuat link WhatsApp
                        $whatsappLink = 'https://wa.me/' . $formattedNumber;
                    @endphp
                    <div class="social-icons">
                        <a href="{{ $whatsappLink }}" target="_blank" rel="noopener noreferrer"
                            class="social-icon text-decoration-none whatsapp">
                            <ion-icon name="logo-whatsapp"></ion-icon>
                        </a>
                        <a href="{{ $user->instagram }}" target="_blank" rel="noopener noreferrer"
                            class="social-icon text-decoration-none instagram">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                        <a href="{{ $user->tiktok }}" target="_blank"
                            rel="noopener noreferrer" class="social-icon text-decoration-none tiktok">
                            <ion-icon name="logo-tiktok"></ion-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <small class="mt-5">Copyright © 2025 - Canyoning Baturraden</small>
        <br>
        <small class="mb-2">
            <a href="/safety" class="text-decoration-none">Safety</a> | <a href="/term" class="text-decoration-none">Term
                And Condition</a>
        </small>
    </footer>
</div>
