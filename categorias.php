<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Categorias - ADS System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <nav class="sidebar">
        <h2>Menu</h2>
        <a href="inicio.php"><i class="fa-solid fa-house"></i> Início</a>
        <a href="categorias.php"><i class="fa-solid fa-tags"></i> Categorias</a>
        <a href="postagens.php"><i class="fa-solid fa-pen-to-square"></i> Postagens</a>
        <a href="usuarios.php"><i class="fa-solid fa-users"></i> Usuários</a>
        <br>
        <a href="login.php" style="color: #ff4444;"><i class="fa-solid fa-right-from-bracket"></i> Sair</a>
    </nav>

    <main class="main-content">
        <header style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
            <div>
                <h1 style="color: #007bff;">Gestão de Categorias</h1>
                <p style="color: #bbb;">Gerencie as etiquetas e tópicos do sistema.</p>
            </div>
            <a href="cad-categoria.php" class="btn" style="display: flex; align-items: center; gap: 8px; text-decoration: none;">
                <i class="fa-solid fa-plus"></i> Nova Categoria
            </a>
        </header>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome da Categoria</th>
                    <th>Descrição</th>
                    <th>Qtd. Postagens</th>
                    <th style="text-align: center;">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td><strong>Programação Python</strong></td>
                    <td>Lógica, scripts e automação com a linguagem Python.</td>
                    <td>12</td>
                    <td style="text-align: center;">
                        <a href="#" style="color: #ffc107; margin-right: 10px;"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" style="color: #ff4444;"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>002</td>
                    <td><strong>Banco de Dados</strong></td>
                    <td>Consultas SQL e modelagem de dados</td>
                    <td>08</td>
                    <td style="text-align: center;">
                        <a href="#" style="color: #ffc107; margin-right: 10px;"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" style="color: #ff4444;"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                 <td>002</td>
                    <td><strong> Mundo Retrô</strong></td>
                    <td>Estética Y2K, fotografia anos 90 e tendências vintage.</td>
                    <td>015</td>
                    <td style="text-align: center;">
                        <a href="#" style="color: #ffc107; margin-right: 10px;"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" style="color: #ff4444;"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
            </tbody>

        </table>
    </main>
</body>
</html>