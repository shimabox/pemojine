
namespace SMB\Pemojine\Structure\Vendor\{{ $vendorName }};

use SMB\Pemojine\Structure\Interfaces\Gettable;

/**
 * Vendor Emoji List.
 */
class {{ $className }} implements Gettable
{
    /**
     * 
     * {{ $phpdocReturn }} array
     */
    public function getBigGroup()
    {
        return $this->bigGroup;
    }

    /**
     * 
     * {{ $phpdocReturn }} array
     */
    public function getMediumGroups()
    {
        return $this->mediumGroups;
    }

    /**
     * 
     * {{ $phpdocReturn }} array
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * 
     * {{ $phpdocVar }} array
     */
    private $bigGroup = @yield('bigGroup')

    /**
     * 
     * {{ $phpdocVar }} array
     */
    private $mediumGroups = @yield('mediumGroup')

    /**
     * 
     * {{ $phpdocVar }} array
     */
    private $groups = @yield('group')
}
