# -*- mode: python -*-

block_cipher = None


a = Analysis(['death.py'],
             pathex=['C:\\Users\\kico\\Documents\\GitHub\\Stealph-botnet\\builder'],
             binaries=[],
             datas=[],
             hiddenimports=[],
             hookspath=[],
             runtime_hooks=[],
             excludes=[],
             win_no_prefer_redirects=False,
             win_private_assemblies=False,
             cipher=block_cipher,
             noarchive=False)
pyz = PYZ(a.pure, a.zipped_data,
             cipher=block_cipher)
exe = EXE(pyz,
          a.scripts,
          a.binaries,
          a.zipfiles,
          a.datas,
          [],
          name='death',
          debug=False,
          bootloader_ignore_signals=False,
          strip=False,
          upx=True,
          runtime_tmpdir=None,
          console=False , icon='C:\\Users\\kico\\Pictures\\Mat-U-Heaven-And-Hell-Heaven-Computer.ico')
