<?php
// Execute Python script to generate Plotly graph
exec("python3 plot_temperature_graph.py 2>&1", $output);

// Output the captured output from Python script (HTML for Plotly graph)
foreach ($output as $line) {
    echo $line . "\n";
}
?>
