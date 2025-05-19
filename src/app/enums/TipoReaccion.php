<?php
    include_once __DIR__ . '/../interfaces/HerramientasEnum.php';

    //aqui se encuentran las constantes de tipo publicacion
    enum TipoReaccion : string implements HerramientasEnum {
        //implementar los distintos casos dentro del enum
        case LIKE = 'like';
        case LOVE = 'love';
        case FUNNY = 'funny';
        // case WOW = 'wow';
        // case SAD = 'sad';
        // case ANGRY = 'angry';
        // case CLAP = 'clap';
        // case BOOKMARK = 'bookmark';

        #puedes hacer un llamado para comprobar que el enum que estes usando pertenezca a las constantes anteriores
        public function perTipoConcept(): bool{
            return in_array($this, [self::LIKE, self::LOVE, self::FUNNY]);
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