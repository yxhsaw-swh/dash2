<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gestão de Usuários - ADS System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        .table-responsive {
            background-color: #1e1e1e; 
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            margin-top: 20px;
            border: 1px solid #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #252525; 
            color: #007bff;
            padding: 15px;
            text-align: left;
            font-size: 13px;
            text-transform: uppercase;
            border-bottom: 2px solid #333;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #333;
            font-size: 14px;
            color: #ccc; 
        }

        tbody tr:nth-child(even) {
            background-color: #252525;
        }

        tbody tr:hover {
            background-color: #2a2a2a; 
        }

        .btn-icon {
            background: none;
            border: none;
            color: #007bff;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
            transition: transform 0.2s;
        }

        .btn-icon:hover {
            transform: scale(1.2);
        }

        .badge {
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
        }

        .badge.ativo {
            background-color: rgba(0, 255, 0, 0.1);
            color: #00ff00;
            border: 1px solid #00ff00;
        }
    </style>
</head>
<body>

    <?php include 'menu.php'; ?>

    <main class="main-content">
        <header style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
            <div>
                <h1 style="color: #007bff;">Gestão de Usuários</h1>
                <p style="color: #bbb;">Visualize e gerencie as permissões dos usuários do sistema.</p>
            </div>
            <a href="cad-usuarios.php" class="btn" style="text-decoration: none;">
                <i class="fa-solid fa-user-plus"></i> Novo Usuário
            </a>
        </header>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Acesso</th>
                        <th>Status</th>
                        <th style="text-align: center;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td><strong>Eric Freitas</strong></td>
                        <td>eric@unifev.edu.br</td>
                        <td>Administrador</td>
                        <td><span class="badge ativo">Ativo</span></td>
                        <td style="text-align: center;">
                            <button class="btn-icon"><i class="fa-solid fa-eye"></i></button>
                            <button class="btn-icon" style="color: #ffc107;"><i class="fa-solid fa-pen"></i></button>
                            <button class="btn-icon" style="color: #ff4444;"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td><strong>Yasmin Neves</strong></td>
                        <td>120787@email.com</td>
                        <td>Editor</td>
                        <td><span class="badge ativo">Ativo</span></td>
                        <td style="text-align: center;">
                            <button class="btn-icon"><i class="fa-solid fa-eye"></i></button>
                            <button class="btn-icon" style="color: #ffc107;"><i class="fa-solid fa-pen"></i></button>
                            <button class="btn-icon" style="color: #ff4444;"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>