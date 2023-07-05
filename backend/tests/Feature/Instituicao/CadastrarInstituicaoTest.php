<?php

namespace Tests\Feature\Instituicao;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CadastrarInstituicaoTest extends TestCase
{
    public function test_ao_passar_os_dados_corretos_preciso_que_retorne_ok(): void
    {
        $instituicao = [
            'descricao' => 'Rede de solidariedade e cuidado, as produtoras de sabão de Gutierrez',
            'objetitvo' => 'Teste',
            'publico_alvo' => 'Pessoas idosas',
            'metodologia' => 'teste',
            'contribuicao' => 'como contribuir?',
            'como_fazer_parte' => 'como fazer parte?',
            'redes_sociais' => 'Facebook, instagram, whatsapp',
            'contatos' => 'e-mail e telefone?',
            'localizacao' => '(-123, -123)',
            'pix' => 'linkParapix'
        ];

        $response = $this->postJson('/instituicao', $instituicao);

        $response->assertStatus(200);
    }
}
