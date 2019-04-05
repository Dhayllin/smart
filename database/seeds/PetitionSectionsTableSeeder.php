<?php

use Illuminate\Database\Seeder;

class PetitionSectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('petition_sections')->insert([
            [
                'id'            =>1,
                'dos_pedidos' =>'Pelo exposto, requer que V. Exa que se digne a:
                    a) conceder o benefício da justiça gratuita, nos termos
                    do art. 98 e 99, NCPC;
                    b) conceder inversão  do ônus da  prova,  inteligência do art. 6o, VIII, CDC;  conforme
                    c) ordenar a citação da ré no endereço indicado para
                    apresentar defesa no prazo legal, sob pena de
                    confissão quanto à matéria de fato ou à revelia;
                    d) conceder o pedido liminar inaudita altera pars de
                    tutela de urgência para suspender a cobrança das 5
                    (cinco) parcelas vincendas de cada um dos 2 (dois) cartões de créditos utilizados para pagamento até o
                    resultado final da demanda, sob pena de multa diária
                    de R$ 200,00 (duzentos reais);
                    e) condenar a ré na obrigação de fazer para receber de
                    volta o produto defeituoso sem imposição de ônus;
                    a. subsidiariamente, em caso de negativa do
                    pedido principal, condenar a ré a proceder o
                    devido reparo no produto defeituoso sem gerar qualquer ônus ao autor.
                    f) condenar a ré no pagamento de indenização no importe
                    de R$ 34.992,00 (trinta e quatro mil e novecentos e
                    noventa e dois reais) pelos danos decorrentes da
                    perda de uma chance, considerando o contrato de locação de 12 meses;
                    g) condenar a ré no pagamento de indenização de cunho
                    não somente compensatório, como também de CARÁTER
                    PUNITIVO – PEDAGÓGICO, no valor de R$ 15.000,00
                    (quinze mil reais) pelos danos morais causados,
                    ratificando a concessão do pedido liminar.
                    h) condenar a ré em danos materiais no importe total de
                    R$ 5.165,49, com incidência de correção monetária e
                    juros legais, nos termos do art. 18, § 1°, II, CDC.
                    Requer, por fim, seja ser julgada procedente a presente
                    ação, sendo a ré condenada, nos termos da inicial.
                    Protesta pela produção de todos os meios de provas, na
                    forma do art. 32 da lei 9.099/95, especialmente documentais,
                    depoimento pessoal das partes e testemunhal.
                    O autor informa desde já que não possui interesse na
                    realização de audiência de conciliação ou de mediação, nos
                    termos do art. 319, VII, NCPC.
                    Atribui à causa o valor de R$ 50.557,49 (cinquenta mil
                    quinhentos e cinquenta e sete reais e quarenta e nove
                    centavos) para efeitos de direito e alçada.',
                'do_direito'=>'a) DA APLICAÇÃO DO CÓDIGO DE DEFESA DO CONSUMIDOR
                    Aplica-se o Código de Defesa do Consumidor no presente
                    caso, tendo em vista ser o autor destinatário final do
                    produto, conforme inteligência do art. 2°, CDC.
                    teoria CDC.
                    De modo a garantir a equidade, deve ser aplicada a
                    finalista, observando as peculiaridades do art. 4o,
                    Resta, portanto, necessária e prudente a aplicação do
                    CDC na presente demanda.
                    b) DA GARANTIA LEGAL / DA ASSISTÊNCIA TÉCNICA
                    O produto foi entregue com defeito ao consumidor, sendo
                    a ré informada dentro do prazo de garantia legal.
                    Assim, considerando inexistir assistência técnica da ré
                    no município de Cuiabá/MT, a mesma resta impelida a fornecer
                    meios de envio do equipamento para conserto sem demandar
                    qualquer custo extraordinário ao consumidor.
                
                    Entretanto, constata-se o inverso nos autos. O réu
                    condicionou o recebimento do produto defeituoso ao pagamento
                    antecipado de R$ 200,00 a título de frete de ida, criando
                    óbices ao direito do consumidor.',
                    
                    'dos_fatos' =>'O autor estava desempregado e conheceu a ré em
                    exposição de novos negócios para autônomos. Assim, ele foi
                    apresentado à MÁQUINA DE SORVETE NA CHAPA ICE CREAM ROLL,
                    também conhecida como MÁQUINA DE SORVETE TAILANDÊS, como
                    excelente forma de empreendimento e de conquista da autonomia
                    financeira, conforme vídeo disponibilizado no canal da ré no
                    site YOU TUBE (clique aqui).
                    Confiante na oferta da ré, em 30.11.17, o autor
                    adquiriu, via telefone, o produto no valor de R$ 5.165,49,
                    conforme nota fiscal anexa (DOC 02-A). Como o autor não
                    possuía cartão de crédito com limite necessário, efetuou o
                    pagamento em 2 cartões distintos (12x R$ 222,17 e 12x R$
                    208,37), conforme extratos anexos (DOC 02-B e DOC 02-C)
                    Em 12.12.17, o produto chegou com defeito, visto que a
                    superfície de contato não gelava completamente para viabilizar
                    a produção do sorvete, sendo relatado já em 18.12.17 (DOC 03).
                    A partir de então o autor trocou diversos e-mails com a
                    ré para solucionar o defeito da máquina o mais rápido possível
                    (DOC 04), já que estava com loja pronta para trabalhar no mês
                    de dezembro/17 no Centro de Cuiabá/MT (DOC 05), visto que seu
                    ponto comercial alugado no COMBOIO FOOD PARK iniciaria a
                    partir de janeiro/18, conforme contrato de locação (DOC 06) e
                    fotos anexas (DOC 07).
                    Os dias passaram e, em 02.01.18, a ré orientou o autor
                    a buscar sponte propria um técnico de refrigeração para
                    mensurar a quantidade de gás no equipamento, tendo em vista a
                    suspeita de vazamento, conforme colacionamos abaixo:
                    Ante a dificuldade do autor em achar um técnico
                    capacitado para o serviço, a ré informou no dia seguinte que
                    faria a manutenção do equipamento defeituoso, desde que
                    houvesse pagamento de R$ 200,00 a título de frete de ida.
                    Necessitado de que a manutenção ocorresse de forma
                    rápida, o autor achou profissional capacitado no valor de R$
                    250,00, mas foi informado pela ré que deveria arcar com tais
                    custos ou pagar pelo frete de R$ 200,00 para envio para
                    assistência técnica no endereço da sede da ré, o que demoraria
                    ainda mais.
                    Indignado, o autor registrou reclamação junto a ré, mas
                    de nada adiantou, já que a mesma ratificou sua posição.
                    Necessitado de trabalhar, principalmente por ter ponto
                    comercial alugado e máquina comprada, o autor seguiu
                    orientação da ré e contratou os serviços de técnico de
                    refrigeração local no valor de R$ 250,00 (DOC 08), o qual não
                    foi ressarcido até o presente.
                    Contudo, a máquina permaneceu apresentando as mesmas
                    falhas, comprovando o vazamento na tubulação refrigeradora.
                    Tal fato impediu o autor de trabalhar de forma regular desde o
                    primeiro mês, tendo em vista que a chapa de confecção de
                    sorvete não atingia a temperatura devida, conforme vídeo
                    detalhado anexo (DOC 09 – mídia depositada na secretaria da vara).
                    Os clientes reclamavam bastante da qualidade do
                    sorvete, visto que o produto não estava devidamente gelado
                    para confecção do “rolls”, era servido parcialmente derretido
                    e deixava bastante sujeira (restos) na plataforma, o que
                    atrasava o atendimento do próximo cliente.
                    Assim, o autor tentou permanecer no ponto comercial,
                    pagando aluguel durante os meses de janeiro, fevereiro e
                    março/2018, conforme comprovantes anexos (DOC 10), mas
                    sucumbiu, visto que não conseguia produzir de forma regular
                    nem com a qualidade devida.
                    Dessa forma, o autor encerrou seu ponto comercial em
                    abril/2108, saindo inadimplente do COMBOIO FOOD PARK.
                    Atualmente, o autor retornou ao status de desempregado,
                    mas com responsabilidade de quitação do equipamento defeituoso
                    (ainda restam 5 parcelas), e com dívidas junto ao COMBOIO FOOD
                    PARK, razão pela qual recorre ao judiciário de modo a
                    preservar seus direitos.',
                'created_at'   => $now,
                'updated_at'    => $now,               
                ],    
        ]);
    }
}
