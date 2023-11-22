async function uploadChunk(chunk, chunkIndex) {
    const formData = new FormData();
    formData.append("chunk", chunk);
    formData.append("chunkIndex", chunkIndex);

    try {
        const response = await fetch("http://localhost:3000/upload", {
            method: "POST",
            body: formData,
        });

        if (!response.ok) {
            document.getElementById("status").textContent = "failed";
            throw new Error("Error uploading chunk.");
        }
    } catch (error) {
        document.getElementById("status").textContent = "failed";
        console.error(error);
    }
}
