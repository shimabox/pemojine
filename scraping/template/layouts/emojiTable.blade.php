
namespace SMB\Pemojine\Structure\Vendor\{{ $vendorName }};

use SMB\Pemojine\Structure\Interfaces\EmojiTable\Gettable;
use SMB\Pemojine\Structure\Traits\EmojiTableTrait;

/**
 *
 */
class EmojiTable implements Gettable
{
    use EmojiTableTrait;

    /**
     *
     * {{ $phpdocVar }} array
     */
    private static $table = @yield('emojiTable')

    /**
     *
     * {{ $phpdocVar }} array
     */
    public static $mappingOfShortName = @yield('mappingOfShortName')
}
