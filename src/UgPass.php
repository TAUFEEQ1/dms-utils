<?php
namespace NitaU\DmsUtils;

class UgPass
{
    // Define a static variable for the script path
    private static string $scriptPath;

    /**
     * Set the script path. This method should be called to initialize the script path.
     *
     * @param string $path Path to the Python script.
     * @return void
     */
    public static function setScriptPath(string $path): void
    {
        self::$scriptPath = $path;
    }

    /**
     * Get the last text block and its coordinates from the last page of a PDF.
     *
     * @param string $pdfPath Path to the PDF file.
     * @return array|null Returns an array with 'last_text', 'last_x0', and 'last_y1', or null if not found.
     */
    public static function getLastTextCoordinates(string $pdfPath): ?array
    {
        if (!isset(self::$scriptPath)) {
            self::setScriptPath(getenv('UGPASS_SCRIPT_PATH'));
        }

         // Debug output
        // Command to execute the Python script
        $command = escapeshellcmd(self::$scriptPath . ' ' . escapeshellarg($pdfPath));
        $output = shell_exec($command);
        // Decode the JSON output from the Python script
        $result = json_decode($output, true);
        if ($result && isset($result['last_text'], $result['last_x0'], $result['last_y1'])) {
            return $result;
        }

        return null;
    }
}
