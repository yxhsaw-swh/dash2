<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Postagens - ADS System</title>
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
                <h1 style="color: #007bff;">Gestão de Postagens</h1>
                <p style="color: #bbb;">Gerencie os conteúdos publicados no sistema.</p>
            </div>
           <a href="cad-postagens.php" class="btn" style="display: flex; align-items: center; gap: 8px; text-decoration: none;">
    <i class="fa-solid fa-plus"></i> Nova Postagem
</a>
            
        </header>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título da Postagem</th>
                    <th>Categoria</th>
                    <th>Data de Publicação</th>
                    <th>Status</th>
                    <th style="text-align: center;">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td><strong>Novidades no Framework PHP</strong></td>
                    <td>Desenvolvimento Web</td>
                    <td>29/03/2026</td>
                    <td style="color: #00ff00;">Publicado</td>
                    <td style="text-align: center;">
                        <a href="#" style="color: #007bff; margin-right: 10px;"><i class="fa-solid fa-eye"></i></a>
                        <a href="#" style="color: #ffc107;"><i class="fa-solid fa-pen"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>002</td>
                    <td><strong>Guia de SQL para Iniciantes</strong></td>
                    <td>Banco de Dados</td>
                    <td>28/03/2026</td>
                    <td style="color: #ffc107;">Rascunho</td>
                    <td style="text-align: center;">
                        <a href="#" style="color: #007bff; margin-right: 10px;"><i class="fa-solid fa-eye"></i></a>
                        <a href="#" style="color: #ffc107;"><i class="fa-solid fa-pen"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>