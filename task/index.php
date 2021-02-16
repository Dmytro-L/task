<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/setting.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/modal.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User list</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="post">
        <?php
require $_SERVER['DOCUMENT_ROOT'] . '/includes/header-footer.php';
?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-box clearfix">
                        <div class="table-responsive" id="content">
                            <table class="table no-wrap user-table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-0 text-uppercase font-medium pl-4 text-center">
                                            <span>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="checkbox_all[]" id="checkbox_all" value="<?=$row->id?>">
                                                    <label for="checkbox_all" class="mb-0">ALL</label>
                                                </div>
                                            </span>
                                        </th>
                                        <th scope="col" class="border-0 text-uppercase font-medium text-center">Name</th>
                                        <th scope="col" class="border-0 text-uppercase font-medium text-center">Status</th>
                                        <th scope="col" class="border-0 text-uppercase font-medium text-center">Role</th>
                                        <th scope="col" class="border-0 text-uppercase font-medium text-center">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    require $_SERVER['DOCUMENT_ROOT'] . '/includes/setting.php';
                                    $sql = 'SELECT * FROM `users` ORDER BY `id` DESC LIMIT 10';
                                    $query = $pdo->query($sql);
                                    while ($row = $query->fetch(PDO::FETCH_OBJ)) {?>
                                        <tr>
                                            <td class="pl-4 text-center">
                                                <input type="checkbox" name="checkbox" class="check" value="<?=$row->id?>">
                                            </td>
                                            <td>
                                                <p class="font-medium mb-0"><?=$row->first_name, ' ', $row->last_name?></з> 
                                            </td>
                                            <td> 
                                                <div class="status
                                                <?php if ($row->status) {print 'active';}?>">
                                                </div>
                                            </td>
                                            <td class="text-center"> 
                                                <span class="role-user">
                                                        <?php
                                                    if ($row->role == 1) {
                                                        print 'Admin';
                                                    } else {
                                                        print 'User';
                                                    }?>
                                                </span>
                                            </td>
                                            <td class="text-center"> 
                                                
                                                <a href="?edit=<?=$row->id?>" class="table-link edit" data-toggle="modal"
                                                    data-target="#exampleModalCenter" data-whatever="User editing" data-id="<?=$row->id?>">
                                                    <input type="hidden" name="id" class="hidden" value="<?=$row->id?>">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-edit"></i>
                                                    </span>
                                                </a>
                                                <a href="?del=<?=$row->id?>" class="table-link danger del" data-toggle="modal"
                                                    data-target="#exampleModalCenter" data-whatever="Deleting user" data-id="<?=$row->id?>">
                                                    <input type="hidden" name="id" class="hidden" value="<?=$row->id?>">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-trash"></i>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
require $_SERVER['DOCUMENT_ROOT'] . '/includes/header-footer.php';
?>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="js/main.js" deffer></script>
</body>

</html>