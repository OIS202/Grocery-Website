<!DOCTYPE html>
<html>
  <head>
    <title>Product List</title>
    <link rel="stylesheet" href="../styles/base.css" />
    <link rel="stylesheet" href="../styles/list-product.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <nav>
      <div class="banner">
        <div class="banner__content">
          <div class="banner__text">
            <strong>Start Shopping Now!</strong>
          </div>
          <button class="banner__close" type="button">
            <span class="material-icons"> close </span>
          </button>
        </div>
      </div>
      <div class="header">
        <img src="../images/logo.png" alt="logo" />
      </div>
      <div class="navbar">
        <a href="../index.html">Home</a>
        <a href="../admin/edit-customer.html">Edit Customer</a>
        <a href="../admin/edit-order.html">Edit Order</a>
        <a href="../admin/edit-product.html">Edit Product</a>
        <a href="../admin/list-customer.html">List Customer</a>
        <a href="../admin/list-order.html">List Order</a>
        <a href="../admin/list-product.html">List Product</a>
      </div>
    </nav>

    <main>
        <div class="container">
            <h3 class="title">Product List</h3>
            <form>
            <div style="flex-direction: column; display: flex; margin:auto; width: 80%;">
            <div class="table-responsive">
            <table
                class="table"
                BORDER="1"
                cellpadding="4"
                cellspacing="3"
            >
                <thead>
                <tr style="text-align: center">
                    <th></th>
                    <th>Product</th>
                    <th>Inventory</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                    $products = json_decode($file_get_contents("../all-products.json"));
                    foreach($products->value as $product)
                    {
                        
                    }

                    $allProductsJson = ;
                    
                    var_dump($products["2"]);
                ?>

                <tr ALIGN="CENTER">
                    <td class="product">
                    <img
                        src="https://cdn.pixabay.com/photo/2014/10/04/17/32/tomato-473764_1280.jpg"
                        alt="Tomato"
                    />
                    </td>
                    <td>Red Cluster Tomates</td>
                    <td>347</td>
                    <td>Fruits & Vegetables</td>
                    <td>6.59$ /kg</td>
                    <td>
                    <a class="btnactions" href="edit-product.html" id="edit"> Edit</a>
                    <a class="btnactions" href="#" id="delete">Delete</a>
                    </td>
                </tr>
                <tr ALIGN="CENTER">
                    <td class="product">
                    <img
                    src=https://cdn.pixabay.com/photo/2017/04/04/17/40/fruits-2202411_1280.jpg
                    alt="Banana" />
                    </td>
                    <td>Banana</td>
                    <td>421</td>
                    <td>Fruits & Vegetables</td>
                    <td>0.97$ /kg</td>
                    <td>
                    <a class="btnactions" href="edit-product.html" id="edit"> Edit</a>
                    <a class="btnactions" href="#" id="delete">Delete</a>
                    </td>
                </tr>
                <tr ALIGN="CENTER">
                    <td class="product">
                    <img
                    src=https://cdn.pixabay.com/photo/2020/02/28/10/44/healthy-4887101_1280.jpg
                    alt="Bread" />
                    </td>
                    <td>Bread</td>
                    <td>56</td>
                    <td>Bread & Baked Products</td>
                    <td>2.99$ ea.</td>
                    <td>
                    <a class="btnactions" href="edit-product.html" id="edit"> Edit</a>
                    <a class="btnactions" href="#" id="delete">Delete</a>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
            <div class="addbtn" style="padding-top: 20px; padding-bottom: 20px;">
                <a class="btnadd" href="#">Add Product</a>
            </div>
            </div>
            </form>
        </div>
    </main>

    <footer>
      <div class="footer">
        <div class="contact">
          <h2>Contact Us:</h2>
          <p>Telephone: 123-456-7890</p>
          <p>Email: TheBestestWebstore@gmail.com</p>
          <p>Twitter: @TheBestest</p>
          <p>Facebook: @TheBestestCa</p>
          <p>Page by Kahina</p>
        </div>
        <div class="social">
          <a href="https://www.facebook.com" class="fa fa-facebook"></a>
          <a href="https://www.twitter.com" class="fa fa-twitter"></a>
          <a href="https://www.youtube.com" class="fa fa-youtube"></a>
        </div>
      </div>
    </footer>
  </body>
</html>
