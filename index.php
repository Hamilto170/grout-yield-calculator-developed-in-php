<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

  $lar = isset($_POST['lar']) ? $_POST['lar'] : '';   
  $total = isset($_POST['total']) ? $_POST['total'] : '';
  $comp = isset($_POST['comp']) ? $_POST['comp'] : '';
  $prof = isset($_POST['prof']) ? $_POST['prof'] : '';
  $laf = isset($_POST['laf']) ? $_POST['laf'] : '';
  $mqa = isset($_POST['mqa']) ? $_POST['mqa'] : '';
if (!empty($total)) {
    if ($total == 'Calcular') {
            $total_ = (((($lar * 10) + ($comp * 10)) * $prof * $laf * 1.58) / ($lar * $comp * 100)) * $mqa;
        $total = round($total_, 2);
        
    }
}
?>
 <p style="font-size: xx-large">CALCULADORA DE CONSUMO</p>
  <form action="" method="post">
    <table style="width:100%">
        
        
        <tr>
            <td>Comprimento da Cerâmica</td>
            <td><input type="text"pattern="^\d+(,\d{1,2cm})?$" required name="comp"
                       placeholder="cm"
                       style="width:90px; height:25px;"></td>
        </tr>
        <tr>
            <td>Largura da Cerâmica</td>
            <td><input type="text"pattern="^\d+(,\d{1,2cm})?$" required id="edit-area" name="lar"
                       value="" placeholder="cm"
                       style="width:90px; height:25px;"></td>
        </tr>
        <tr>
            <td>Largura da Fuga</td>
            <td><input type="text"pattern="^\d+(,\d{1,2mm})?$" required name="laf"
                       placeholder="mm"
                       style="width:90px; height:25px;"></td>
        </tr>
        <tr>
            <td>Área de Assentamento</td>
            <td><input type="text"pattern="^\d+(,\d{1,2m²})?$" required name="mqa"
                       placeholder="m²"
                       style="width:90px; height:25px;"></td>
            
        </tr>
        <tr>
            <td>Qual sua Peça?</td>
            <td><select name="prof">
                    <option value="8">Piso</option>
                    <option value="8">Porcelanato</option>
                    <option value="4">Pastilha</option>
                    <option value="10"><b>Pedra</b></option>
                </select></td>
        </tr>
        <tr>
            <td>
                <button
                    class="calculate_consumption btn-block btn-primary button js-form-submit form-submit btn"
                    data-drupal-selector="edit-submit" type="submit" id="edit-submit" name="total" 
                    value="Calcular">Calcular
                </button>
            </td>
            <td style="font-size: xx-large">
                <?php
       echo "$total (KG)";
                ?>
            </td>
        </tr>
    </table>
    <br>
</form>
<script>
    <?php
    if ($_POST['lar']) {
        echo "setTimeout(1, vaiPraBaixo())";
    }
    ?>
    function vaiPraBaixo() {
        window.scrollTo(0, document.body.scrollHeight + 30);
    }
</script>
