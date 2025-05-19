 <style>
    html, body {
      height: 100%;
      margin: 0;
      font-family: "Tahoma", sans-serif;
      background-color: #f9f9f9;

      display: flex;
      flex-direction: column;
    }

    body > *:not(.site-footer) {
      flex: 1 0 auto; /* محتوای صفحه فضای خالی را پر می‌کند */
    }

    .site-footer {
      background-color: #222;
      color: #fff;
      padding: 40px 20px 20px;
      text-align: center;
      flex-shrink: 0; /* از کوچک شدن جلوگیری می‌کند */
    }

    .footer-container {
      max-width: 1000px;
      margin: auto;
    }

    .footer-left h2 {
      margin: 0;
      font-size: 24px;
    }

    .footer-left p {
      margin-top: 8px;
      font-size: 14px;
      color: #bbb;
    }

    .footer-links {
      margin: 20px 0;
    }

    .footer-links a {
      color: #aaa;
      margin: 0 10px;
      text-decoration: none;
      font-size: 14px;
      transition: color 0.3s;
    }

    .footer-links a:hover {
      color: #fff;
    }

    .footer-bottom {
      border-top: 1px solid #444;
      margin-top: 20px;
      padding-top: 10px;
      font-size: 13px;
      color: #888;
    }
  </style>

  <!-- اگر محتوایی داری اینجا قرار بده -->
  <!-- <main>محتوا</main> -->

  <!-- فوتر سایت -->
  <footer class="site-footer">
    <div class="footer-container">
      <div class="footer-left">
        <h2>MyWebsite</h2>
        <p>ارائه‌دهنده بهترین خدمات وب و طراحی.</p>
      </div>

      <div class="footer-links">
        <a href="#">درباره ما</a>
        <a href="#">تماس با ما</a>
        <a href="#">حریم خصوصی</a>
        <a href="#">قوانین</a>
      </div>
    </div>

    <div class="footer-bottom">
      <p>© 2025 MyWebsite. تمامی حقوق محفوظ است.</p>
    </div>
  </footer>

</body>
</html>
