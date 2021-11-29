<html>
    <head>
        <meta charset="UTF-8">
        <link href="main.css" rel="stylesheet" type="text/css"/>
        <title>Book Keeper</title>
    </head>
    <body>
        <main>
            <h1>This Works!</h1>
            <button onClick="">Add Book</button>
        </main>

        <table border="1"> 
            <tr>             
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Number Available</th>
                <th>Publisher</th>
                <th>Year Published</th>
                <th>Book Rating</th>
            </tr>
            
            <?php foreach ($book as $books) : ?>
            <tr>
                <td><?php echo htmlspecialchars($books->getTitle()); ?></td>
                <td><?php echo htmlspecialchars($books->getAuthor()); ?></td>
                <td><?php echo htmlspecialchars($books->getGenre()); ?></td>
                <td><?php echo htmlspecialchars($books->getNumberAvailable()); ?></td>
                <td><?php echo htmlspecialchars($books->getPublisher()); ?></td>
                <td><?php echo htmlspecialchars($books->getYearPublished()); ?></td>
                <td><?php echo htmlspecialchars($books->getBookRating()); ?></td>
            </tr>               
            <?php endforeach; ?>               
        </table>
        
        <br><br>
            <form action="index.php" method="post">
                <input type="submit" name="action" value="Logout">
            </form>
    </body>
</html>