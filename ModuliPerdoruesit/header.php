

<?php
// Ensure the database connection is included
include_once("config.php");

// Fetch data from the tedhenat table where PageLayout is 'Header'
$result = mysqli_query($conn, "SELECT * FROM tedhenat_umps WHERE PageLayout_umps='Header'");

// Loop through the results and display the data
while ($row = mysqli_fetch_assoc($result)) {
    extract($row);
?>
    <section>
        <div class="inner">
            <h3><?php echo $Titulli_umps; ?></h3>
        </div>
    </section>
<?php
    // Free the result set after the loop
    if ($row == mysqli_fetch_assoc($result)) {
        mysqli_free_result($result);
    }
}
?>
