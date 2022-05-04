<?php include '../view/header.php'; ?>
<main>
    <section>
        <h1>Add A Utensil</h1>
        <form action="/exam2/utensils/index.php" method="post">
            <input type="hidden" name="action" value="add_utensil_data">
            Utensil Name: <input type="text" name="utensil_name"><br>
            Utensil Description: <input type="text" name="utensil_description"><br>
            Utensil Type: 
            <select name="utensil_type">
                <?php foreach ($utensil_types as $utensil_type) : ?>
                    <option value="<?=$utensil_type[0]?>"><?=$utensil_type[0]?></option>
                <?php endforeach; ?>
            </select><br>
            Utensil Year Purchased: <input type="year" name="utensil_year_purchased">

            <input type="submit" value="Submit">
        </form>
    </section>
</main>
<?php include '../view/footer.php'; ?>