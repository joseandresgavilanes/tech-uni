import os
import cv2

camera = cv2.VideoCapture(0, cv2.CAP_DSHOW)

try:
    while True:
        ret, image = camera.read()
        if not ret:
            print("Error: No se pudo acceder a la cámara")
            break
        
        file_path = 'api/images/webcam.jpg'  # Incluir el nombre del archivo
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