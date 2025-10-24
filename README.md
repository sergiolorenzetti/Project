# Sistema de Horóscopo - Project

## Descrição
Sistema web para consulta de signos do zodíaco baseado na data de nascimento do usuário. O sistema exibe informações detalhadas sobre cada signo, incluindo características, pontos positivos e pontos a melhorar, junto com ícones visuais representativos.

## Estrutura do Projeto
```
Project/
├── assets/
│   ├── css/
│   │   └── style.css        # Estilos do sistema
│   ├── imgs/                # Ícones dos signos
│   │   └── signo_*.png      # Ícones para cada signo
│   ├── js/                  # Scripts JavaScript
│   └── layouts/
│       ├── footer.php       # Rodapé padrão
│       ├── header.php       # Cabeçalho padrão
│       ├── index.php        # Página inicial
│       ├── show_zodiac_sign.php  # Página de exibição do signo
│       └── signos.xml       # Base de dados dos signos
```

## Funcionalidades

### Consulta de Signo
- Input de data de nascimento
- Exibição do signo correspondente
- Apresentação de ícone representativo
- Descrição detalhada do signo
- Características principais
- Pontos positivos e pontos a melhorar

## Arquivos Principais

### show_zodiac_sign.php
Página principal que processa a data de nascimento e exibe as informações do signo.

#### Como Usar
1. Insira uma data de nascimento válida no formato DD/MM
2. O sistema identificará automaticamente o signo correspondente
3. Serão exibidos:
   - Nome do signo
   - Ícone representativo
   - Descrição completa
   - Características principais

### signos.xml
Base de dados contendo informações sobre todos os signos do zodíaco.

#### Estrutura do XML
```xml
<signo>
    <signoNome>Nome do Signo</signoNome>
    <signoID>id-do-signo</signoID>
    <data_inicio>DD/MM</data_inicio>
    <data_fim>DD/MM</data_fim>
    <descricao>Descrição detalhada do signo</descricao>
</signo>
```

## Requisitos Técnicos
- Servidor web com PHP
- Suporte a XML
- Navegador web moderno com suporte a CSS3

## Convenções de Arquivos
### Ícones dos Signos
- Localização: `/assets/imgs/`
- Formato de nome: `signo_[id].png`
- Exemplo: `signo_aries.png`, `signo_touro.png`

## Casos Especiais
O sistema trata adequadamente casos especiais como:
- Signos que atravessam a virada do ano (ex.: Capricórnio)
- Validação de datas inválidas
- Formatação correta das datas de entrada

## Desenvolvimento
Para adicionar novos recursos ou fazer manutenção:
1. Os arquivos PHP estão na pasta `assets/layouts/`
2. Estilos CSS em `assets/css/style.css`
3. Ícones devem ser adicionados em `assets/imgs/`
4. Novos signos podem ser adicionados ao `signos.xml`

## Manutenção
### Adicionar/Modificar Signos
1. Edite o arquivo `signos.xml`
2. Siga a estrutura XML existente
3. Certifique-se de que as datas estão no formato correto (DD/MM)
4. Adicione o ícone correspondente em `assets/imgs/`

### Modificar Aparência
- Edite `style.css` para alterações visuais
- Os ícones podem ser substituídos mantendo o mesmo nome de arquivo