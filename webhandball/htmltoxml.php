<?php

$html = '<tbody>
                <tr>
                    <td class="resRoute">263</td>
                    <td class="resDir">Route Name</td>
                    <td class="resDue">1 min</td>
                </tr>
                <tr>
                    <td class="resRoute">17</td>
                    <td class="resDir">Route Name</td>
                    <td class="resDue">2 min</td>
                </tr>
            </tbody>
        </table>
    ';

    $body = explode('<tbody>', $html);

    $xml = simplexml_load_string("<?xml version='1.0' encoding='utf-8'?><xml />");

    $rows = array();
    foreach (array_slice(explode('<tr>', end($body)), 1) as $row)
    {
        preg_match('/resRoute">([0-9]+)<\/td>/', $row, $ids);
        preg_match('/resDir">([^<]+)<\/td>/', $row, $dir);
        preg_match('/resDue">([^<]+)<\/td>/', $row, $due);

        $node = $xml->addChild('train');

        $node->addChild('route', $ids[1]);
        $node->addChild('direction', $dir[1]);
        $node->addChild('due', $due[1]);
    }

    header('Content-Type: text/xml');
    echo $xml->asXML();
 

?>