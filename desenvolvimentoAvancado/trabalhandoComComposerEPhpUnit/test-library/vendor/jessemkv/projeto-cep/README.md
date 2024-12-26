# BuscadorDeCep

**BuscadorDeCep** é uma biblioteca PHP para busca de CEPs (Códigos de Endereçamento Postal) no Brasil.

## Instalação

Você pode instalar a biblioteca usando o Composer. Execute o seguinte comando:

```bash
composer require seu-usuario/buscador-de-cep

require 'vendor/autoload.php';

use BuscadorDeCep\CepClient;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('02030010');

print_r($resultado);
```

# Métodos
buscarCep($cep)
Busca informações do endereço a partir do CEP informado.

Parâmetro:
$cep (string): O CEP que você deseja buscar.
Retorno:
Um objeto com as informações do endereço.

# Contribuição
Contribuições são bem-vindas! Sinta-se à vontade para abrir uma issue ou um pull request.
