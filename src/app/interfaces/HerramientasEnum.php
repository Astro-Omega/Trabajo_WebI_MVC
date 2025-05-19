<?php
    interface HerramientasEnum{

        public function perTipoConcept(): bool;
        public static function retornarTipo($valor): ?self;
    }
?>