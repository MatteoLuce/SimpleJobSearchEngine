<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Search Engine</title>
    
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/form.css"> 
    <link rel="stylesheet" href="ccs/bulma.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f1d5b849e9.js" crossorigin="anonymous"></script>
    <script src="js/func.js"></script>

    <script type="text/javascript">
        function search(){
        location.href = 'http://localhost/dashboard/Project/search.php?term='+document.getElementById('dimm').value.replace(' ','-').replace(/\W+/g,'-')+'&orde=ORDER-BY-date-ASC&place='+document.getElementById('dovm').value;
        }
    </script>

</head>
<body>
    
    <section class="hero is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="center_exp">
                    <div class="center_bottom">Search your new job</div>
                        <div class="columns is-mobile">
                            <div class="column is-12-desktop">
                                <div class="field has-addons">
                                <div class="control is-expanded">
                                    <form action="#" onsubmit="search(); return false;" class="control is-grouped" id="start_form">
                                        <input type="text" id="dimm" class="input is-medium is-expanded" name="jobs" placeholder= "job..." pattern=".{3,}" title="Please enter 3 or more characters" style="font-family: Roboto" required>
                                </div>
                                <div class="control is-expanded">
                                        <input type="text" id="dovm" class="input is-medium is-expanded" name="place" placeholder= "where..." pattern=".{3,}" title="Please enter 3 or more characters" style="font-family: Roboto">                            
                                </div>
                                <div class="control">
                                    <button class="button is-medium is-black" type="submit">
                                    <i class="fa-solid fa-magnifying-glass fa-beat" style="color: #e4e2e2;"></i>  
                                </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/bulma.js"></script>
</body>
</html>