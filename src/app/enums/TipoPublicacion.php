<?php
    include_once __DIR__ . '/../interfaces/HerramientasEnum.php';

    //aqui se encuentran las constantes de tipo publicacion
    enum TipoPublicacion : string implements HerramientasEnum {
        case TEXTO = 'texto';
        case IMAGEN = 'imagen';
        case VIDEO = 'video';

        #puedes hacer un llamado para comprobar que el enum que estes usando pertenezca a las constantes anteriores
        public function perTipoConcept(): bool{
            return in_array($this, [self::TEXTO, self::IMAGEN, self::VIDEO]);
        }

        #usado para comprobar si se esta usando algun valor dentro de la listas del enum
        public static function retornarTipo($valor): ?self{
            foreach(self::cases() as $contenido){
                if($contenido->value == $valor){
                    return $contenido;
                }
            }
            return null;
        }
    }
?>