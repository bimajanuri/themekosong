<?php
// Thema kosong HeadlessWordPress
get_header();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Terlarang</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #f7f7f7;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Content Styling */
        #main-content {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 40px;
            max-width: 700px;
            width: 100%;
            margin: 20px auto;
            box-sizing: border-box;
            flex-grow: 1;
        }

        h1 {
            font-size: 3rem;
            color: #e74c3c;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        p {
            font-size: 1.2rem;
            color: #555;
        }

        /* Footer Styling */
        footer {
            background-color: #2c3e50;
            color: #fff;
            text-align: center;
            padding: 15px 0;
            position: relative;
            width: 100%;
            font-size: 1rem;
            bottom: 0;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }

            p {
                font-size: 1rem;
            }

            footer {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div id="main-content">
        <h1>Area Terlarang</h1>
        <p>Apabila anda melihat halaman ini, berarti anda telah memasuki area terlarang</p>
    </div>
    <footer>
        <p>&copy; 2025 Website Anda. Semua Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>
