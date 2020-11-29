<?php
class Pagination
{
    public static function createPageLink($totalRow, $perPage, $page)
    {
        $numberPage = ceil($totalRow / $perPage);
        $next = $page;
        $disableNext = '';
        $disablePrevious = '';

        if ($page < $numberPage) {
            $next++;
        } else {
            $disableNext = 'disabled';
        }

        if ($page==1) {
           $disablePrevious='disabled';
        }

        $output = "<nav aria-label='Page navigation example'>
        <ul class='pagination justify-content-center' style='margin-top: 10px;'>
          <li class='page-item $disablePrevious'>
            <a class='page-link' href='?page=".($page-1)."' aria-label='Previous'>
              <span aria-hidden='true'>&laquo;</span>
              <span class='sr-only'>Previous</span>
            </a>
          </li>";

        for ($i = 1; $i <= $numberPage; $i++) {
            if ($i==$page) {
                $output .= "<li class='page-item active'><a class='page-link' href='?page=$i'>$i</a></li>";
            }else{
                $output .= "<li class='page-item' ><a class='page-link' href='?page=$i'>$i</a></li>";
            }
            // $output .="<a href='#'>$i</a>";
            // $output .= "<li class='page-item'><a class='page-link' href='?page=$i'>$i</a></li>";
        }
        $output .= "<li class='page-item $disableNext'>
            <a class='page-link' href='?page=$next' aria-label='Next'>
            <span aria-hidden='true'>&raquo;</span>
            <span class='sr-only'>Next</span>
            </a>
        </li>
        </ul>
        </nav>";
        return $output;
    }
}
