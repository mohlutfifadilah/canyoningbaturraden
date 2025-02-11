@extends('template.main')
@section('title', 'Contact | Canyoning Baturraden')
@section('content')
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-md-6">
            <h3>Contact us</h3>
            <p class="mt-4">
                <ion-icon name="logo-whatsapp"></ion-icon> 0822-2513-3909
            </p>
            <p>
                <ion-icon name="mail-unread-outline"></ion-icon> info@canyoningbaturraden.id
            </p>
            <p>
                <ion-icon name="logo-instagram"></ion-icon> @canyoningbaturraden
            </p>
            <p>
                <ion-icon name="logo-tiktok"></ion-icon> @canyoningbaturraden
            </p>
        </div>
        <div class="col-md-6">
            <h3>Leave Message</h3>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('contact.us.store') }}" class="text-left">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @if(session('name')) is-invalid @endif @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @error('name')
                            <small id="name" class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                            @if (session('name'))
                            <small id="name" class="text-danger">
                                {{ session('name') }}
                            </small>
                            @endif
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control @if(session('email')) is-invalid @endif @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email') }}">
                                @error('email')
                                <small id="email" class="text-danger">
                                    {{ $message }}
                                </small>
                                @enderror
                                @if (session('email'))
                                <small id="email" class="text-danger">
                                    {{ session('email') }}
                                </small>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control @if(session('phone')) is-invalid @endif @error('phone') is-invalid @enderror"
                                    id="phone" name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                <small id="phone" class="text-danger">
                                    {{ $message }}
                                </small>
                                @enderror
                                @if (session('phone'))
                                <small id="phone" class="text-danger">
                                    {{ session('phone') }}
                                </small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control @if(session('subject')) is-invalid @endif @error('subject') is-invalid @enderror"
                                id="subject" name="subject" value="{{ old('subject') }}">
                            @error('subject')
                            <small id="subject" class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                            @if (session('subject'))
                            <small id="subject" class="text-danger">
                                {{ session('subject') }}
                            </small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control @if(session('message')) is-invalid @endif @error('message') is-invalid @enderror" id="message" name="message" rows="3">{{ old('message') }}</textarea>
                            @error('message')
                            <small id="message" class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                            @if (session('message'))
                            <small id="message" class="text-danger">
                                {{ session('message') }}
                            </small>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-12">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.353376167817!2d109.23556147471729!3d-7.314140971916216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ff52a320fa3bb%3A0x965680b0a0ab3ba4!2sBhumi%20Bambu%20Baturraden!5e0!3m2!1sid!2sid!4v1739002073185!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
</script>
@endsection
