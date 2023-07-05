<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="style.css">

  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/addToCart.js"></script>
    <!-- Other head elements -->
  </head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
</head>

<body>


  <section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="img/clogo.png" width="50" height="50" alt="Logo" class="navbar-logo" />
          Hooman Coffee
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="accountScreen.html">Account Screen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="chefScreen.html">Chef Screen</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>



  <section>
    <img src="img/banner.jpg" width="100%" height="100%" alt="" />
  </section>

  <section>
    <div class="container my-4">
      <h1 class="text-center">Best Selling Coffee</h1>
      <div class="row my-3">
        <div class="col-4">
          <div class="card" style="width: 18rem">
            <img src="img/c1.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card" style="width: 18rem">
            <img src="img/c2.avif" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card" style="width: 18rem">
            <img src="img/c3.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <section>
   

    <form id="myForm" onsubmit="redirectUser()">
      <div class="container my-4">
        <label for="tableNumber" class="col-sm-4 col-form-label">Table Number</label>
        <input type="number" id="tableNumber" name="tableNumber" class="form-control" placeholder="Enter your Table Number" required />
      </div>
      <div class="container my-4">
        <div class="table-container">
          <table class='table'>
            <tr align="center">
              <th>Menu Item</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total Amount</th>
            </tr>
            <tr align="center">
              <td>Coffee</td>
              <td><span id="price_quantity_coffee">350</span></td>
              <td>
                <button type="button" class="btn btn-dark" onclick="incrementQuantity('quantity_coffee')">+</button>
                <input type="text" id="quantity_coffee" name="quantity_coffee" min="0" value="0" style="width: 10%;">
                <button type="button" class="btn btn-dark" onclick="decrementQuantity('quantity_coffee')">-</button>
              </td>
              <td>
                <span id="total_quantity_coffee">
                  0
                </span>
              </td>
            </tr>
            <tr align="center">
              <td>Tea</td>
              <td><span id="price_quantity_tea">250</span></td>
              <td>
                <button type="button" class="btn btn-dark" onclick="incrementQuantity('quantity_tea')">+</button>
                <input type="text" id="quantity_tea" name="quantity_tea" min="0" value="0" style="width: 10%;">
                <button type="button" class="btn btn-dark" onclick="decrementQuantity('quantity_tea')">-</button>
              </td>
              <td>
                <span id="total_quantity_tea">
                  0
                </span>
              </td>
            </tr>
            <tr align="center">
              <td>Organic Tea</td>
              <td><span id="price_quantity_organic">450</span></td>
              <td>
                <button type="button" class="btn btn-dark" onclick="incrementQuantity('quantity_organic')">+</button>
                <input type="text" id="quantity_organic" name="quantity_organic" min="0" value="0" style="width: 10%;">
                <button type="button" class="btn btn-dark" onclick="decrementQuantity('quantity_organic')">-</button>
              </td>
              <td>
                <span id="total_quantity_organic">
                  0
                </span>
              </td>
            </tr>
            <tr align="center">
              <td>Mocca Latte</td>
              <td><span id="price_quantity_mocca">850</span></td>
              <td>
                <button type="button" class="btn btn-dark" onclick="incrementQuantity('quantity_mocca')">+</button>
                <input type="text" id="quantity_mocca" name="quantity_mocca" min="0" value="0" style="width: 10%;">
                <button type="button" class="btn btn-dark" onclick="decrementQuantity('quantity_mocca')">-</button>
              </td>
              <td>
                <span id="total_quantity_mocca">
                  0
                </span>
              </td>
            </tr>
            <tr align="center">
              <td>Espresso</td>
              <td><span id="price_quantity_espresso">1250</span></td>
              <td>
                <button type="button" class="btn btn-dark" onclick="incrementQuantity('quantity_espresso')">+</button>
                <input type="text" id="quantity_espresso" name="quantity_espresso" min="0" value="0" style="width: 10%;">
                <button type="button" class="btn btn-dark" onclick="decrementQuantity('quantity_espresso')">-</button>
              </td>
              <td>
                <span id="total_quantity_espresso">
                  0
                </span>
              </td>
            </tr>
            <tr align="center">
              <td>Americano</td>
              <td><span id="price_quantity_americano">1350</span></td>
              <td>
                <button type="button" class="btn btn-dark" onclick="incrementQuantity('quantity_americano')">+</button>
                <input type="text" id="quantity_americano" name="quantity_americano" min="0" value="0" style="width: 10%;">
                <button type="button" class="btn btn-dark" onclick="decrementQuantity('quantity_americano')">-</button>
              </td>
              <td>
                <span id="total_quantity_americano">
                  0
                </span>
              </td>
            </tr>
          </table>
          <center>
            <p>Total Amount: <span id="totalAmount">PKR 0.00</span></p>

            <input type="submit" class="btn btn-dark" value="Add to Cart">
          
              <button id="shiftButton" class="btn btn-dark">View Cart</button>
          </center>
        </div>
      </div>
    </form>
  </section>




  <script src="js/product.js"></script>
  <script src="js/script.js"></script>
  <!-- ///<script src="js/addToCart.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>