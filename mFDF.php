 <?php
 if(isset($layoutType) && $layoutType == 'pdf')
        {
           ob_start();
            require_once(ROOT . DS  . 'vendor' . DS  . 'mpdf' . DS  . 'mpdf' . DS . 'mpdf.php');
            $mpdf = new mPDF();
            $mpdf->setHeader('PdfHeaderNam');
            $mpdf->setFooter('Page {PAGENO}');
            $response = $this->render('view', array(), true);
            $thebody = $response->body();
            $mpdf->WriteHTML($thebody);
            ob_end_clean();
            $mpdf->Output('OutputName.pdf', 'I');//
           
        }

?>