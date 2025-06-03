@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row">
        <!-- Contact Form Section -->
        <div class="col-md-6 mb-4">
            <h2 class="mb-4">Contact Us</h2>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>

        <!-- Map Section -->
        <div class="col-md-6">
            <h2 class="mb-4">Find Us</h2>
            <div class="map-container" style="height: 400px;">
                <iframe 
                    width="100%" 
                    height="100%" 
                    frameborder="0" 
                    style="border:0" 
                    src="https://www.google.com/maps/embed/v1/place?key=YOUR_GOOGLE_MAPS_API_KEY&q=your+business+address" 
                    allowfullscreen>
                </iframe>
            </div>
            <div class="mt-4">
                <h4>Contact Information</h4>
                <p><i class="fas fa-map-marker-alt"></i> 123 Flower Street, City, Country</p>
                <p><i class="fas fa-phone"></i> +1 234 567 890</p>
                <p><i class="fas fa-envelope"></i> info@floristonline.com</p>
            </div>
        </div>
    </div>
</div>
@endsection