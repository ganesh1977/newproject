import sys

from PyQt5.QtCore import QCoreApplication
from PyQt5.QtWidgets import QApplication

from PySide2.QtCore import *
from PySide2.QtWidgets import *
from PySide2.QtUiTools import QUiLoader

QCoreApplication.setAttribute(Qt.AA_ShareOpenGLContexts)  # Set attribute before QApplication

class Form(QObject):
    def __init__(self, wi_file, parent = None):
        super().__init__(parent)

        wi_file = QFile(wi_file)
        wi_file.open(QFile.ReadOnly)

        loader = QUiLoader()
        self.window = loader.load(wi_file)
        wi_file.close()

        self.window.show()

if __name__ == "__main__":
    app = QApplication(sys.argv)
    
    form = Form("cart.wi")
    sys.exit(app.exec_())