
<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Elements by BuildWith Angga</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
crossorigin="anonymous">
    </head>
    <body>
       <section class="h-100 w-100" style="box-sizing: border-box; background-color: #FFFDFD">

    <style>
        @import 
url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        .empty-4-3{
            padding: 2.5rem 2rem 5rem;
        }
        ::-webkit-scrollbar {
            --webkit-appearance: none;
        }

        ::-webkit-scrollbar:vertical {
            width: 11px;
        }

        ::-webkit-scrollbar:horizontal {
            height: 11px;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 8px;
            border: 2px solid white; /* should match background, can't be transparent */
            background-color: rgba(0, 0, 0, .5);
        }

        ::-webkit-scrollbar-track { 
            background-color: #fff; 
            border-radius: 8px; 
        }
        .empty-4-3 .img{
            width: 83.333333%;
            margin-bottom: 0.75rem;
            object-fit: cover;
            object-position: center;
        }
        .empty-4-3 .title-text{
            font: 600 1.875rem/2.25rem Poppins, sans-serif;            
            color: #000000;
            letter-spacing: 0.025em;
            margin-bottom: 0.75rem;
        }
        .empty-4-3 .caption-text{
            margin-bottom: 3rem;
            color: #9C9C9C;
            font-size: 1rem;
            letter-spacing: 0.025em;
            line-height: 1.75rem;
        }
        .empty-4-3 .btn-set{
            font: 600 1.125rem/1.75rem Poppins, sans-serif;            
            padding: 1rem 2rem;
            border-radius: 0.75rem;
            background-color: #FF7C57;
            transition: 0.3s;
            text-decoration: none;
        }
        .empty-4-3 .btn-set:hover{
            background-color: #FF9779;
            transition: 0.3s;
        }
        @media (min-width: 576px) {
            .empty-4-3{
                padding: 2.5rem 2rem 7rem;
            }
            .empty-4-3 .img{
                width: auto;
            }
        }        
    </style>

    <div class="empty-4-3" style="font-family: 'Poppins', sans-serif;">    
        <div class="mx-auto d-flex align-items-center justify-content-center flex-column">
            <img class="img" 
src="http://api.elements.buildwithangga.com/storage/files/2/assets/Empty%20State/EmptyState3/Empty-3-9.png" 
alt="">                       
            <div class="text-center w-100">
                <h1 class="title-text">
                    Sukses!
                </h1>
                <p class="caption-text">
                    Terima kasih {{ $namas->name }} telah berpartisipasi memberikan hak suaranya dalam acara PILKETOS 2021
                </p>
                <div class="d-flex justify-content-center">
		<a href="/#contact" style="text-decoration:none;">
                    <button class="btn btn-set d-inline-flex text-white">
                        Kembali
                    </button>
		</a>
                </div>
            </div>
        </div>
    </div>
  </section> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" 
crossorigin="anonymous"></script>
    </body>
  </html>
