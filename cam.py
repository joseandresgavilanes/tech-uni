import os
import cv2
import requests

# Capturar imagen desde la webcam
camera = cv2.VideoCapture(0, cv2.CAP_DSHOW)

try:
    while True:
        ret, image = camera.read()
        if not ret:
            print("Error: No se pudo acceder a la cámara")
            break
        
        file_path = 'webcam.jpg' 
        cv2.imwrite(file_path, image)
        
        # Verificar que la imagen se guarda correctamente
        if os.path.exists(file_path):
            print(f'Archivo guardado correctamente en {file_path}')
        else:
            print(f'Error al guardar el archivo en {file_path}')
            break
        
        # Salir del bucle después de una captura exitosa
        break

except KeyboardInterrupt:
    print("Programa terminado por el usuario")

finally:
    camera.release()
    cv2.destroyAllWindows()

# URL de la API
api_url = 'http://127.0.0.1//tech-uni/api/upload.php'  # Cambia esto por la URL de tu API

# Enviar la imagen a la API
def upload_photo(url, filepath):
    with open(filepath, 'rb') as f:
        files = {'imagem': f}
        response = requests.post(url, files=files)
        return response.text

# Llamar a la función para enviar la foto
response = upload_photo(api_url, file_path)
print("Respuesta de la API:", response)

# Eliminar el archivo temporal
os.remove(file_path)
