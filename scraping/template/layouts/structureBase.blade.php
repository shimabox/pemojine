
namespace SMB\Pemojine\Structure\Vendor;

use SMB\Pemojine\Structure\Interfaces\Configurable;

/**
 *
 */
class {{ $vendorName }} implements Configurable
{
    /**
     * 
     * {{ $phpdocReturn }} string
     */
    public function getVendorName()
    {
        return '{{ $vendorName }}';
    }

    /**
     * 
     * {{ $phpdocReturn }} array
     */
    public function getClassNameListOfStructure()
    {
        return @yield('classNameListOfStructure')
    }

    /**
     * 
     * {{ $phpdocReturn }} string
     */
    public function getClassNameOfEmojiTable()
    {
        return {{ $vendorName }}\EmojiTable::class;
    }
}
