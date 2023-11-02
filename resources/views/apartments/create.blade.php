<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="POST" action="/apartments" enctype="multipart/form-data">
            @csrf 
            <p>
                <label for="title">Enter Apartment name</label>
                <input type="text" placeholder="ex: 2 Bedroom flat" name="title" />
            </p>
            <p>
                <label for="state">Enter Apartment state</label>
                <input type="text" placeholder="ex: Akwa Ibom State" name="state" />
            </p>
            
            <p>
                <label for="location">Enter Apartment location</label>
                <input type="text" placeholder="ex: 2 no. 10 udo udoma avenue" name="location" />
            </p>
            <p>
                <label for="price">Enter Apartment price</label>
                <input type="text" placeholder="ex: 10000" name="price" />
            </p>
            <p>
                <label for="status">Publish as Available for rent?</label>
                <select name="status">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </p>
            
            <p>Display image</p>
            <input type="file" name="displayImage" />
            <p>Add images</p>
            <input type="file" name="image1" />
            <p>image 2 (optional) </p>
            <input type="file" name="image2" />
            <input type="submit" name="submit" />
        </form>
    </div>
        

</body>
</html>