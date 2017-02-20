<<<<<<< HEAD
<?php

//Display Category List Page
include('category_list.php')

?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <header><h1>My Guitar Shop</h1></header>

    <main>
        <h2 class="top">Error</h2>
        <p>Invalid category ID.</p>
    </main>

    <footer>
        <p>&copy; 2017 My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>


=======
<!DOCTYPE html>
<html>

<!-- head section -->
<head>
	<title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- body section-->
<body>
<main>
	<header><h1>Product Manager</h1></header>
<main>
    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>        
                <tr>
            <td>Guitars</td>
            <td>
                <form action="delete_category.php" method="post">
                    <input type="hidden" name="category_id"
                           value="1"/>
                    <input type="submit" value="Delete"/>
                </form>
            </td>
        </tr>
                <tr>
            <td>Basses</td>
            <td>
                <form action="delete_category.php" method="post">
                    <input type="hidden" name="category_id"
                           value="2"/>
                    <input type="submit" value="Delete"/>
                </form>
            </td>
        </tr>
                <tr>
            <td>Drums</td>
            <td>
                <form action="delete_category.php" method="post">
                    <input type="hidden" name="category_id"
                           value="3"/>
                    <input type="submit" value="Delete"/>
                </form>
            </td>
        </tr>
            
    </table>

    <h2 class="margin_top_increase">Add Category</h2>
    <form action="add_category.php" method="post"
          id="add_category_form">

        <label>Name:</label>
        <input type="text" name="name" />
        <input id="add_category_button" type="submit" value="Add"/>
    </form>
    
    <p><a href="index.php">List Products</a></p>
</main>

<footer>
	 <p>&copy; 2017 My Guitar Shop, Inc.</p>
</footer>
</body>




</html>
>>>>>>> 35257c8a9e64e024165dc218951c04ed2b301738
