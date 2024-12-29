<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->
<style>
    table tr td {
        border: solid 1px
    }
</style>

<?=view('components/errors') ?>
<table>
    <tr style="background-color: #dddddd;">
        <td>name</td>
        <td>id</td>
        <td>email</td>
        <td>phonenumber</td>
        <td>role</td>
    </tr>
    <tr>
        <td><?= $user['name'] ?></td>
        <td><?= $user['id']   ?></td>
        <td><?= $user['email']  ?></td>
        <td><?= $user['phone_number']  ?></td>
        <td><?= $user['role']  ?></td>
    </tr>

</table>