<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload file</title>
</head>
<body>
<button id="btn-import">Upload</button>
<input id="file-input" type="file" />
<div id="status"></div>
</body>
</html>

<script src="upload.js"></script>

<script>
    const importInvoices = () => {
        document.getElementById("file-input").click();
        // Example usage
        const fileInput = document.getElementById("file-input");
        fileInput.addEventListener("change", async (event) => {
            document.getElementById("status").textContent = "uploading";
            const file = event.target.files[0];
            const chunkSize = 100 * 1024 * 1024; // Set the desired chunk size (100MB in this example)
            const totalChunks = Math.ceil(file.size / chunkSize);

            // Iterate over the chunks and upload them sequentially
            for (let chunkIndex = 0; chunkIndex < totalChunks; chunkIndex++) {
                const start = chunkIndex * chunkSize;
                const end = Math.min(start + chunkSize, file.size);
                const chunk = file.slice(start, end);

                // Make an API call to upload the chunk to the backend
                await uploadChunk(chunk, chunkIndex);
            }
            document.getElementById("status").textContent = "successfully";
        });
    };

    document.getElementById("btn-import").addEventListener("click", (event) => {
        event.preventDefault();
        importInvoices();
    });

</script>

<?php

    header("Access-Control-Allow-Origin: *");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $index = $_POST['chunkIndex'];
        $file = $_FILES['chunk'];

        if ($file['error'] !== UPLOAD_ERR_OK) {
            http_response_code(400);
            echo "Failed to retrieve file";
            exit;
        }

        // Process and save the chunk to a file
        $outputFileName = "./upload-file/video" . $index;
        if (!move_uploaded_file($file['tmp_name'], $outputFileName)) {
            http_response_code(500);
            echo "Failed to create file";
            exit;
        }

        echo "Chunk uploaded successfully";
    }
//    else {
//        http_response_code(405); // Method Not Allowed
//        echo "Method not allowed";
//    }


    function concatenateVideo($length): bool
    {
        // Open the output file for writing
        $outputFile = fopen("./upload-file/output.mp4", 'wb');
        if (!$outputFile) {
            echo "Error22: Unable to create output file\n";
            return false;
        }

        // List the video chunks in the desired order
        $chunkPaths = array();
        for ($i = 0; $i < $length; $i++) {
            $chunkPaths[] = "./upload-file/video" . $i;
        }

        // Concatenate the video chunks
        foreach ($chunkPaths as $chunkPath) {
            // Open the current chunk file
            $chunkFile = fopen($chunkPath, 'rb');
            if (!$chunkFile) {
                echo "Error: Unable to open chunk file: $chunkPath\n";
                return false;
            }

            // Copy the chunk content to the output file
            while (!feof($chunkFile)) {
                $chunkData = fread($chunkFile, 8192); // Read in 8KB chunks
                fwrite($outputFile, $chunkData);
            }

            fclose($chunkFile);
        }

        fclose($outputFile);
        return true;
    }

    $isConcatenate = concatenateVideo(8);
    if (!$isConcatenate) {
        echo "Concatenation failed\n";
    } else {
        echo "Concatenation successful\n";
    }

