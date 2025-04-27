<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ServisUTS - @yield('title', 'Website')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
          --primary: #FF3E41;
          --secondary: #2F2F2F;
          --accent: #FFD166;
          --light: #F7F7F7;
          --shadow: 8px 8px 0px var(--secondary);
        }
        
        body {
          font-family: 'Courier New', monospace;
          background-color: var(--light);
          color: var(--secondary);
          line-height: 1.6;
        }
        
        .neo-navbar {
          background-color: var(--primary);
          border-bottom: 4px solid var(--secondary);
          box-shadow: var(--shadow);
        }
        
        .neo-navbar .navbar-brand {
          font-weight: 800;
          letter-spacing: -1px;
          color: var(--secondary);
        }
        
        .neo-navbar .nav-link {
          font-weight: 600;
          color: var(--secondary);
          padding: 8px 16px;
          margin: 0 4px;
          border: 2px solid transparent;
        }
        
        .neo-navbar .nav-link:hover, 
        .neo-navbar .nav-link.active {
          background: var(--accent);
          border: 2px solid var(--secondary);
        }
        
        .neo-container {
          background: white;
          border: 4px solid var(--secondary);
          box-shadow: var(--shadow);
          padding: 2rem;
          margin-top: 2rem;
          margin-bottom: 2rem;
        }
        
        .neo-footer {
          background-color: var(--primary);
          border-top: 4px solid var(--secondary);
          box-shadow: 0 -4px 0 var(--secondary);
          font-weight: 600;
          padding: 1.5rem;
        }
        
        .neo-btn {
          background: var(--primary);
          color: var(--secondary);
          border: 3px solid var(--secondary);
          box-shadow: 4px 4px 0 var(--secondary);
          font-weight: 700;
          padding: 8px 20px;
          transition: all 0.2s;
        }
        
        .neo-btn:hover {
          transform: translate(2px, 2px);
          box-shadow: 2px 2px 0 var(--secondary);
        }
        
        h1, h2, h3, h4, h5, h6 {
          font-weight: 800;
          letter-spacing: -1px;
        }
      </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container">
          <a class="navbar-brand" href="/">Servis Uda Hensem</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container my-2">
        @yield('content')
      </div>

      <footer class="bg-dark text-center text-white py-2">
        Copyright &copy; Fail Hylmi
      </footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>