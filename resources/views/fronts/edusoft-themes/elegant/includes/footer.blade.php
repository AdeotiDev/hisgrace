<footer class="footer">
    <div class="container">
       <div class="row">
        <div class="col-6">
            <p>&copy; {{ date('Y') }} {{$schoolDetails['school_name']}}. All rights reserved.</p>
            <div class="social-links">
                <a href="https://facebook.com" target="_blank">Facebook</a>
                <a href="https://twitter.com" target="_blank">Twitter</a>
                <a href="https://instagram.com" target="_blank">Instagram</a>
            </div>
            
        </div>
        <div class="col-6">
            <ul style="list-style-type: none; text-align:left;">
                <li><b>Phone:</b> {{$schoolDetails['school_phone']}}</li>
                <li><b>Address:</b> {{$schoolDetails['school_address']}}</li>
            </ul>
        </div>
       </div>
    </div>
</footer>
